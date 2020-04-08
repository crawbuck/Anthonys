const nav = () => {
  const btn = document.querySelector('.js-nav-trigger');
  console.log('bfjsknf');
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    console.log('hi');
  });
};

export default nav;