<script>
    const counter = document.getElementById('counter');
    const regisForm = document.getElementById('registrasi-form');
    const submitButton = document.getElementById('submit-button');

    const generateUniqueCode = (length) => {
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let result = '';
        for (let i = 0; i < length; i++) {
            const randomIndex = Math.floor(Math.random() * characters.length);
            result += characters[randomIndex];
        }
        return result;
    }

    const codeUnique = generateUniqueCode(10);

    const makeSecureUrl = (url) => {
        if (url.startsWith('http://')) {
            return url.replace('http://', 'https://');
        }
        return url;
    };

    counter.classList.toggle('hidden');

    regisForm.addEventListener("submit", async (e) => {
        e.preventDefault();
        // let baseUrl = makeSecureUrl('{{ route('user.store') }}');
        let baseUrl = '{{ route('user.store') }}';

        submitButton.disabled = true;
        submitButton.innerText = 'Process...';

        const formData = {
            fullname: document.getElementById('fullname').value,
            email: document.getElementById('email').value,
            whatsapp: document.getElementById('whatsapp_number').value,
            address: document.getElementById('address').value,
            position: document.getElementById('position').value,
            code: codeUnique,
            birthday: document.getElementById('birthday').value,
            gender: document.getElementById('gender').value,
        };

        try {
            const response = await fetch(baseUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(formData)
            });

            if (!response.ok) {
                throw new Error('Failed to submit form');
            }

            localStorage.removeItem('quizState');
            localStorage.removeItem('testFinished');
            localStorage.setItem('fullname', formData.fullname);
            localStorage.setItem('code', codeUnique);
            const parts = formData.birthday.split("-");
            const reversedbirthday = `${parts[2]}-${parts[1]}-${parts[0]}`;
            localStorage.setItem('birthday', reversedbirthday);
            localStorage.setItem('gender', formData.gender);
            localStorage.setItem('email', formData.email);
            localStorage.setItem('whatsapp', formData.whatsapp);
            localStorage.setItem('address', formData.address);
            localStorage.setItem('position', formData.position);

            window.location.href =
                `{{ route('resting-state') }}?title=${encodeURIComponent('Inteligence Quotient')}`;
        } catch (error) {
            console.error(error);
            alert('An error occurred while submitting the form');
        } finally {
            submitButton.disabled = false;
            submitButton.innerText = 'Submit';
        }
    });
</script>
