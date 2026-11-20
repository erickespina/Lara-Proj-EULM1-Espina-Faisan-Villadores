document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contact-form');
    if (!form) return;
    const status = document.getElementById('contact-status');
    const fields = ['name', 'email', 'subject', 'message'].map(name => document.getElementById(`contact-${name}`));
    const labels = { name: 'your name', email: 'your email address', subject: 'a subject', message: 'a message' };

    function validate(field) {
        const value = field.value.trim();
        let error = '';
        if (!value) error = `Please enter ${labels[field.name]}.`;
        else if (field.name === 'email' && (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value) || field.validity.typeMismatch)) error = 'Please enter a valid email address, such as you@example.com.';
        else if (value.length > field.maxLength) error = `Please use ${field.maxLength} characters or fewer.`;
        document.getElementById(`${field.id}-error`).textContent = error;
        field.setAttribute('aria-invalid', String(Boolean(error)));
        return !error;
    }

    fields.forEach(field => {
        field.addEventListener('blur', () => validate(field));
        field.addEventListener('input', () => {
            status.hidden = true;
            if (field.hasAttribute('aria-invalid')) validate(field);
        });
    });

    form.addEventListener('submit', event => {
        event.preventDefault();
        const results = fields.map(validate);
        status.hidden = false;
        if (results.includes(false)) {
            status.dataset.state = 'error';
            status.textContent = 'Please correct the highlighted fields before continuing.';
            fields[results.indexOf(false)].focus();
            return;
        }
        status.dataset.state = 'success';
        status.textContent = 'Success! Your message passed validation. This is a demo, so no email was sent and no details were saved.';
        form.reset();
        fields.forEach(field => {
            field.removeAttribute('aria-invalid');
            document.getElementById(`${field.id}-error`).textContent = '';
        });
        status.focus();
    });
    document.getElementById('contact-submit').disabled = false;
});
