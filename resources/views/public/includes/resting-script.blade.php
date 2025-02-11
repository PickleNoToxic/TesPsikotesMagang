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

    const handleRedirect = (title) => {

        const userId = @json(session('user_id')); 

        if (userId === null) {
            window.location.href = "{{ route('registration') }}";
        } else if (title === 'Inteligence Quotient') {
            window.location.href = '/inteligence-quotient';
        } else if (title === 'Personality') {
            window.location.href = '/personality-test'; 
        }
    };
</script>
