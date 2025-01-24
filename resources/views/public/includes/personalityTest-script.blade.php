<script>
    let currentQuestion = 0;
    const nextElement = document.getElementById('next-button');
    const backElement = document.getElementById('back-button');
    const submitElement = document.getElementById('submit-button');
    const counterHeader = document.getElementById('counter');
    counterHeader.classList.add('hidden');

    let userScoreMelankolis = 0;
    let userScoreKoleris = 0;
    let userScorePhlegmatis = 0;
    let userScoreSanguinis = 0;

    const testFinished = localStorage.getItem('testFinished');

    if (!@json(session('user_id'))) {
        window.location.href = '/registration'
    }
if (testFinished == "true") {
        window.location.href = "{{ route('finish') }}";
    }


    const data = @json($datas);
    const dataFiltered = data.filter(item => item.is_active);

    let userAnswers = Array(dataFiltered.length).fill(null).map((_, index) => ({
        personality_test_id: dataFiltered[index].id,
        answer: null
    }));
    let tempAnswer  = Array (dataFiltered.length).fill(null).map((_, index) => ({
        optionIndex:null
    }))

    const showQuestion = () => {
        // const questionElement = document.getElementById('question');
        // questionElement.textContent = dataFiltered[currentQuestion].question;
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
            tempAnswer
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
        tempAnswer[index].optionIndex = selectedOption
        userAnswers[index].answer = dataFiltered[index][`category_option_${selectedOption}`];
        userAnswers[index].statement = dataFiltered[index][`statement_${selectedOption}`];
        userAnswers[index].option = dataFiltered[index][`option_${selectedOption}`];
    };

    const checkedAnswer = (index) => {
        const selectedValue = tempAnswer[index].optionIndex;
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

    const submitQuiz = () => {
        for (let i = 0; i < dataFiltered.length; i++) {
            switch (userAnswers[i].answer) {
                case 'Sanguinis':
                    userScoreSanguinis += 1;
                    break;
                case 'Melankolis':
                    userScoreMelankolis += 1;
                    break;
                case 'Koleris':
                    userScoreKoleris += 1;
                    break;
                case 'Phlegmatis':
                    userScorePhlegmatis += 1;
                    break;
                default:
                    break;
            }
        }

        let userCode = localStorage.getItem('code');
        let finalAnswers = userAnswers.sort((a, b) => a.personality_test_id - b
            .personality_test_id);

        fetch(`/personality-store/${userCode}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                personality_test: finalAnswers
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

        fetch(`/personality-score`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                score_koleris: userScoreKoleris,
                score_melankolis: userScoreMelankolis,
                score_phlegmatis: userScorePhlegmatis,
                score_sanguinis: userScoreSanguinis
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
                    `{{ route('finish') }}`;
                localStorage.setItem('testFinished', true);
            });
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred: ' + error.message);
        });
    };

    window.onload = () => {
        const savedState = localStorage.getItem('quizState');
        if (savedState) {
            const {
                currentQuestion: savedCurrentQuestion,
                userAnswers: savedUserAnswers,
                tempAnswer: savedTempAnswer
            } = JSON.parse(savedState);
            currentQuestion = savedCurrentQuestion;
            userAnswers = savedUserAnswers;
            tempAnswer = savedTempAnswer;
            showQuestion();
            checkedAnswer(currentQuestion);
        } else {
            displayAnswers();
            showQuestion();
        }
    };
</script>
