window.addEventListener("DOMContentLoaded", () => {
  const index_page = document.querySelector(".index__page");
  const load_more_btn = document.querySelector(".catalog__more");

  if (index_page) {
    loadMoreHandler(load_more_btn);
  }

  function loadMoreHandler(btn) {
    btn.addEventListener("click", () => {
      console.log("more");
    });
  }
});
