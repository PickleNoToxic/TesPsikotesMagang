<script>
    const counterHeader = document.getElementById('counter');
    const titleContainer = document.getElementById('title');
    const openEyesContainer = document.getElementById('open-eyes');
    const closedEyesContainer = document.getElementById('closed-eyes');
    const startStimulus = document.querySelectorAll('.stimulus-start');
    const counter = document.querySelectorAll(".counter");

    let intervalId;
    let sentence;
    let currentStimulus = 0;

    // Initially hide the counter
    counterHeader.classList.add('hidden');

    // const toggleButton = () => {
    //     startStimulus.forEach(element => {
    //         element.classList.toggle('hidden');
    //     });
    // };

    // const countdown = () => {
    //     let count = parseInt(counter[currentStimulus].textContent, 10) - 1;
    //     counter[currentStimulus].textContent = count;

    //     if (count === 0) {
    //         currentStimulus++;
    //         clearInterval(intervalId);

    //         if (currentStimulus === 1) {
    //             showStimulusCloseEyes();
    //         } else {
    //             window.location.href = "{{ route('biografi') }}";
    //         }
    //     }
    // };

    const handleRedirect = (title) => {
        localStorage.removeItem('testFinished');
        localStorage.removeItem('quizState');

        const userId = @json(session('user_id')); 

        if (userId === null) {
            window.location.href = "{{ route('registration') }}";
        } else if (title === 'Inteligence Quotient') {
            window.location.href = '/inteligence-quotient';
        } else if (title === 'Personality') {
            window.location.href = '/personality-test'; 
        }
    };

    // const stimulusOpenEyes = () => {
    //     toggleButton();
    //     intervalId = setInterval(countdown, 1000);
    // };

    // const showStimulusCloseEyes = () => {
    //     toggleButton();
    //     sentence = `
    //         Silahkan tekan tombol <span class='font-semibold'>START</span> 
    //         <br> untuk proses STIMULUS selanjutnya,
    //         <br> <span class='font-semibold uppercase'>tutup mata</span> Anda 
    //         sampai terdengar instruksi buka mata Anda.
    //     `;
    //     titleContainer.innerHTML = sentence;

    //     openEyesContainer.classList.add("hidden");
    //     closedEyesContainer.classList.remove("hidden");
    // };

    // const stimulusClosedEyes = () => {
    //     toggleButton();
    //     setTimeout(() => {
    //         if (voice && typeof voice.play === 'function') {
    //             voice.play().then(() => console.log("Voice played"));
    //         }
    //     }, 55000);
    //     intervalId = setInterval(countdown, 1000);
    // };
</script>
