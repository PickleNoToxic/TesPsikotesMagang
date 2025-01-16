<script>
    const counterHeader = document.getElementById('counter');
    const titleContainer = document.getElementById('title');
    const openEyesContainer = document.getElementById('open-eyes');
    const closedEyesContainer = document.getElementById('closed-eyes');
    const startStimulus = document.querySelectorAll('.stimulus-start');
    const counter = document.querySelectorAll(".counter");

    let intervalId
    let sentence
    let currentStimulus = 0;

    counterHeader.classList.toggle('hidden');

    const toggleButton = () => {
        startStimulus.forEach(element => {
            element.classList.toggle('hidden');
        });
    }

    const countdown = () => {
        let count = counter[currentStimulus].textContent * 1 - 1;
        counter[currentStimulus].textContent = count;
        if (count === 0) {
            currentStimulus++;
            clearInterval(intervalId);
            if (currentStimulus === 1) {
                showStimulusCloseEyes();
            } else {
                window.location.href = "{{ route('biografi') }}";
            }
        }
    }

    const handleRedirect= () => {
        localStorage.removeItem('testFinished');
        window.location.href = '/inteligence-quotient'
    }

    const stimulusOpenEyes = () => {
        toggleButton();
        intervalId = setInterval(countdown, 1000);
    }

    const showStimulusCloseEyes = () => {
        toggleButton();
        sentence = "Silahkan tekan tombol <span class='font-semibold'>START</span> <br> untuk proses STIMULUS selanjutnya,<br> <span class='font-semibold uppercase'>tutup mata</span> Anda sampai terdengar intruksi buka mata Anda.";
        titleContainer.innerHTML = sentence

        openEyesContainer.classList.toggle("hidden")
        closedEyesContainer.classList.toggle("hidden")
    }

    const stimulusClosedEyes = () => {
        toggleButton();
        setTimeout(() => {voice.play().then()}, 55000);
        intervalId = setInterval(countdown, 1000);
    }
</script>