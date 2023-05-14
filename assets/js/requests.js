window.addEventListener("DOMContentLoaded", () => {
  const catalog = document.querySelector(".catalog");
  const load_more_btn = document.querySelector(".catalog__more");
  const category_selects = document.querySelectorAll(".catalog__category");
  const catalog_sort_items = document.querySelectorAll(".catalog__sort-item");
  const sort_type_item = document.querySelector(".catalog__sort-type");

  // options for query to get posts
  const query_options = {
    selected_category: "all",
    sort_type: "catalog__popularity",
    sort_order: "DESC",
    post_offset: 0,
  };

  if (catalog) {
    loadMoreHandler(load_more_btn);
    selectCategoryHandler(category_selects, query_options, get_post_data);
    sortCatalogHandler(
      catalog_sort_items,
      sort_type_item,
      query_options,
      get_post_data
    );
  }

  function sortCatalogHandler(
    sort_items,
    sort_type_item,
    query_options,
    query_callback
  ) {
    sort_items.forEach((item) =>
      item.addEventListener("click", (e) => {
        // TODO: remove request if e.target is already selected
        const sort_type = e.target.dataset.type;

        // set sort type
        if (sort_type === "popularity") {
          query_options.sort_type = "catalog__popularity";
        } else {
          query_options.sort_type = "catalog__price";
        }

        // set sort order
        if (sort_type === "fromMinToMax") {
          query_options.sort_order = "ASC";
        } else {
          query_options.sort_order = "DESC";
        }

        // reset post offset
        query_options.post_offset = 0;

        // get posts
        query_callback("ajax_sort", query_options);
      })
    );
  }

  // add handlres to 'catalog__category' items
  function selectCategoryHandler(
    category_selects,
    query_options,
    query_callback
  ) {
    category_selects.forEach((btn) =>
      btn.addEventListener("click", (e) => {
        // TODO: remove request if e.target is already selected

        // set category
        query_options.selected_category = e.target.dataset.type;

        // reset post offset
        query_options.post_offset = 0;

        // get posts
        query_callback("ajax_sort", query_options);
      })
    );
  }

  // add handler to "load more" button
  function loadMoreHandler(btn) {
    btn.addEventListener("click", () => {
      //TODO: hide load__more button if no more posts

      // reset post offset
      query_options.post_offset += 2;

      // get posts
      get_post_data("ajax_sort", query_options);
    });
  }

  // get posts from WP
  function get_post_data(action, query_options = {}) {
    const url = document.querySelector(".ajaxurl").textContent;
    $.ajax({
      url: url,
      type: "POST",
      data: {
        action: action, // functions.php
        query_options,
      },
      success: function (results) {
        console.log(results);
      },
    });
  }
});
