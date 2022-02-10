const multipleSelectWrapper = document.querySelector('.multiple-select-wrapper')
const multipleSelect = document.querySelector('.multiple-select')

multipleSelectWrapper.addEventListener('click', event => {
    multipleSelect.classList.toggle('active')
})

multipleSelect.addEventListener('change', event => {
    const selectedOptions = [...event.target.selectedOptions].map(option => option.value)

    multipleSelect.classList.toggle('active')

    multipleSelectWrapper.value = selectedOptions.join(', ')
})