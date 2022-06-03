const deleteForms = document.querySelectorAll('.delete-form')
console.log(deleteForms);

deleteForms.forEach(element => {
    const name = element.getAttribute('data-name')
    element.addEventListener('submit', (e)=> {
        e.preventDefault();
        const accept = confirm(`Sei sicuro di voler eliminare: ${name}`);
        if (accept) e.target.submit();
    })
});
