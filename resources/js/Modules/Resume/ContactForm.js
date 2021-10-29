export default class ContactForm
{
    #form;

    /**
     * @param {HTMLElement} form
     */
    constructor(form) {
        this.#form = form;

        this.#registerHandlers();
    }

    #registerHandlers() {
        this.#form.addEventListener('submit', event => {
            event.preventDefault();
            let response = this.#submit();

            this.#handleResponse(response);
        });
    }

    async #submit() {
        let url    = this.#form.getAttribute('action');
        let method = this.#form.getAttribute('method');

        let response = await fetch(url, {
            method: method,
            headers: {
                'Accept': 'application/json'
            },
            body: new FormData(this.#form)
        });

        return response.json();
    }

    /**
     * @param {Promise} response
     */
    #handleResponse(response) {
        response.then(response => {
            if (response.errors) {
                this.#handleErrorResponse(response);
            } else {
                this.#handleSuccessResponse(response);
            }
        })
    }

    #handleErrorResponse(response) {
        let alert = this.#form.querySelector('.alert-success');
        alert.classList.add('d-none');

        for(name in response.errors) {
            let input = this.#form.querySelector('[name="' + name + '"]');
            input.classList.add('is-invalid');
            let feedback = input.parentElement.querySelector('.invalid-feedback');
            feedback.classList.add('d-inline-block');
            feedback.textContent = response.errors[name];
        }
    }

    #handleSuccessResponse(response) {
        let alert = this.#form.querySelector('.alert-success');
        alert.classList.remove('d-none');
        alert.textContent = response.message;

        let inputElements = this.#form.querySelectorAll('input, select, textarea');
        inputElements.forEach((element, index, original) => {
            element.classList.remove('is-invalid');
            let feedback = element.parentElement.querySelector('.invalid-feedback');
            feedback.classList.remove('d-inline-block');
            feedback.textContent = '';
        });
    }
}
