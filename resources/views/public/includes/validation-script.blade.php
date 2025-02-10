<script>
    let currentQuestion = 0;
    const nextElement = document.getElementById('next-button');
    const backElement = document.getElementById('back-button');
    const submitElement = document.getElementById('submit-button');
    const counterHeader = document.getElementById('counter');

    let userScore = 50;
    let countdown = 0; //in seconds

    const testFinished = localStorage.getItem('testFinished');

    if (!@json(session('user_id'))) {
        window.location.href = '/registration'
    }
    if (testFinished == "true") {
        window.location.href = "{{ route('finish') }}";
    }

    const savedState = localStorage.getItem('quizState');
    if (savedState) {
        countdown = JSON.parse(savedState).countdown;
    } else {
        fetch('/master-web/latest')
            .then(response => response.json())
            .then(data => {
                if (data) {
                    countdown = data['iq_test_duration'] * 60;
                }
            })
            .catch(error => console.error('Error:', error));
    }

    const updateCountdown = () => {
        const hours = Math.floor(countdown / 3600);
        const minutes = Math.floor((countdown % 3600) / 60);
        const seconds = countdown % 60;

        counterHeader.innerHTML =
            `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        countdown--;

        saveStateToLocalStorage();

        if (countdown < 0) {
            clearInterval(intervalId);
            submitQuiz();
        }
    };

    const data = @json($datas);
    const dataFiltered = data.filter(item => item.is_active);

    let userAnswers = Array(dataFiltered.length).fill(null).map((_, index) => ({
        inteligence_quotient_test_id: dataFiltered[index].id,
        answer: null
    }));


    const showQuestion = () => {
        const questionElement = document.getElementById('question');
        questionElement.textContent = dataFiltered[currentQuestion].question;
        displayAnswers();
        updateNavigationButtons();
    };

    const displayAnswers = () => {
        const answersContainer = document.getElementById('answers-container');
        answersContainer.innerHTML = '';

        const options = [];
        let optionIndex = 1;

        while (dataFiltered[currentQuestion][`option_${optionIndex}`]) {
            options.push(dataFiltered[currentQuestion][`option_${optionIndex}`]);
            optionIndex++;
        }

        options.forEach((answer, index) => {
            const answerDiv = document.createElement('div');
            answerDiv.classList.add('flex', 'items-center', 'gap-4');

            const inputElement = document.createElement('input');
            inputElement.classList.add('w-6', 'h-6', 'mt-[2px]', 'shrink-0', 'text-blue-600', 'bg-gray-100',
                'border-gray-300', 'focus:ring-blue-500', 'focus:ring-2');
            inputElement.type = 'radio';
            inputElement.name = `answer-${currentQuestion}`;
            inputElement.id = `answer${currentQuestion}-${index + 1}`;
            inputElement.value = index + 1;

            inputElement.addEventListener('change', () => {
                storeUpdateAnswer(currentQuestion, index + 1);
            });

            const labelElement = document.createElement('label');
            labelElement.htmlFor = `answer${currentQuestion}-${index + 1}`;
            labelElement.classList.add('ml-2');
            labelElement.textContent = answer;

            answerDiv.appendChild(inputElement);
            answerDiv.appendChild(labelElement);

            answersContainer.appendChild(answerDiv);
        });
    };

    const saveStateToLocalStorage = () => {
        const state = {
            currentQuestion,
            userAnswers,
            countdown
        };
        localStorage.setItem('quizState', JSON.stringify(state));
    };

    const updateNavigationButtons = () => {
        backElement.classList.toggle('hidden', currentQuestion === 0);

        nextElement.classList.toggle('hidden', currentQuestion === dataFiltered.length - 1);

        submitElement.classList.toggle('hidden', currentQuestion !== dataFiltered.length - 1);
    };

    const resetCheckboxes = () => {
        const selectedAnswer = document.querySelector(`input[name="answer-${currentQuestion}"]:checked`);
        if (selectedAnswer) {
            selectedAnswer.checked = false;
        }
    };

    const storeUpdateAnswer = (index, selectedOption) => {
        userAnswers[index].answer = selectedOption;
    };

    const checkedAnswer = (index) => {
        const selectedValue = userAnswers[index].answer;
        const radioElement = document.querySelector(`input[name="answer-${index}"][value="${selectedValue}"]`);

        if (radioElement) {
            radioElement.checked = true;
        } else {
            resetCheckboxes();
        }
    };

    const prevQuestion = () => {
        if (currentQuestion > 0) {
            currentQuestion--;
            showQuestion();
            checkedAnswer(currentQuestion);
            backElement.classList.toggle('hidden', currentQuestion === 0);
            nextElement.classList.remove('hidden');
            submitElement.classList.add('hidden');

            saveStateToLocalStorage();
        }
    };

    const nextQuestion = () => {
        const selectedAnswer = document.querySelector(`input[name="answer-${currentQuestion}"]:checked`);
        if (selectedAnswer && currentQuestion < dataFiltered.length - 1) {
            storeUpdateAnswer(currentQuestion, parseInt(selectedAnswer.value));
            currentQuestion++;
            showQuestion();
            checkedAnswer(currentQuestion);

            backElement.classList.remove('hidden');
            nextElement.classList.toggle('hidden', currentQuestion === dataFiltered.length - 1);
            submitElement.classList.toggle('hidden', currentQuestion !== dataFiltered.length - 1);

            saveStateToLocalStorage();
        } else {
            Swal.fire({
                icon: 'warning',
                title: 'No answer selected',
                text: 'Please select an answer to continue.',
                confirmButtonText: 'OK'
            });
        }
    };

    const submitQuiz = (button = null) => {
        if (button) {
            button.onclick = null;
            button.style.pointerEvents = 'none';
            button.style.opacity = '0.6';
        }

        //Calculate final score
        for (let i = 0; i < dataFiltered.length; i++) {
            if (userAnswers[i].answer === parseInt(dataFiltered[i].correct_answer)) {
                userScore += dataFiltered[i].score;
            }
        }

        let userCode = localStorage.getItem('code');
        let finalAnswers = userAnswers.sort((a, b) => a.inteligence_quotient_test_id - b
            .inteligence_quotient_test_id);

        fetch(`/inteligence-quotient-store/${userCode}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                inteligence_quotient_test: finalAnswers
            })
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to save answers');
                }
                return response.json();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred: ' + error.message);
            });

        fetch(`/inteligence-quotient-score`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                score: userScore
            })
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to save score');
                }
                return response.json();
            })
            .then(dataFiltered => {
                Swal.fire({
                    icon: 'success',
                    title: 'Your answers have been submitted!',
                    text: 'Thank you for completing the quiz.',
                    confirmButtonText: 'OK'
                }).then(() => {
                    localStorage.removeItem('quizState');
                    window.location.href =
                        `{{ route('resting-state') }}?title=${encodeURIComponent('Personality')}`;
                    localStorage.setItem('testFinished', true);
                });
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred: ' + error.message);
            });
    };

    const intervalId = setInterval(updateCountdown, 1000);

    window.onload = () => {
        const savedState = localStorage.getItem('quizState');
        if (savedState) {
            const {
                currentQuestion: savedCurrentQuestion,
                userAnswers: savedUserAnswers,
                countdown: savedCountdown
            } = JSON.parse(savedState);
            currentQuestion = savedCurrentQuestion;
            userAnswers = savedUserAnswers;
            countdown = savedCountdown;

            showQuestion();
            checkedAnswer(currentQuestion);
        } else {
            displayAnswers();
            showQuestion();
        }
    };
</script>