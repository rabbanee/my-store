const btnEdit = document.querySelectorAll('.btn-edit');
console.log(btnEdit);
// const StorageURL = 'http://127.0.0.1:8000/storage/';
// const modal = document.querySelector('#modal');

btnEdit.forEach(e => {
  e.addEventListener('click', function () {  
    const title = document.querySelector('.modal-body input#title');
    const slug = document.querySelector('.modal-body input#slug');
    const image = document.querySelector('.modal-body #image');
    const price = document.querySelector('.modal-body input#price');

    title.value = e.getAttribute('data-title');
    slug.value = e.getAttribute('data-slug');
    image.src = `storage/images/${e.getAttribute('data-image')}`;
    price.value = e.getAttribute('data-price');
    $('#modal').modal('show');
  });
  
});