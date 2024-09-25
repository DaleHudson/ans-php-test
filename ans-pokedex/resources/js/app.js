import './bootstrap';

const searchForm = document.getElementById('searchForm');

searchForm.addEventListener('submit', function (event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const token = document.querySelector('input[name="_token"]').value;

    axios.post('/search', {
        name: name,
        _token: token
    }).then(function (response) {
        const tableBody = document.querySelector('#pokemonTable tbody');
        tableBody.innerHTML = response.data;
    }).catch(function (error) {
        console.log(error);
    });
});
