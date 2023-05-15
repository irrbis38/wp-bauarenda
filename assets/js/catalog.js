window.addEventListener("DOMContentLoaded", () => {
  const catalog = document.querySelector(".catalog");
  const catalog_wrapper = document.querySelector(".catalog__wrapper");
  const load_more_btn = document.querySelector(".catalog__more");
  const category_selects = document.querySelectorAll(".catalog__category");
  const catalog_sort_items = document.querySelectorAll(".catalog__sort-item");
  const sort_type_item = document.querySelector(".catalog__sort-type");
  const catalog_nofound = document.querySelector(".catalog__nofound");

  // options for query to get posts
  const query_options = {
    selected_category: "all",
    sort_type: "catalog__popularity",
    sort_order: "DESC",
    post_offset: 0,
  };

  if (catalog) {
    loadMoreHandler();
    selectCategoryHandler();
    sortCatalogHandler();
  }

  function sortCatalogHandler() {
    catalog_sort_items.forEach((item) =>
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
        getPostData("ajax_sort", true);
      })
    );
  }

  // add handlres to 'catalog__category' items
  function selectCategoryHandler() {
    category_selects.forEach((btn) =>
      btn.addEventListener("click", (e) => {
        // TODO: remove request if e.target is already selected

        // set category
        query_options.selected_category = e.target.dataset.type;

        // reset post offset
        query_options.post_offset = 0;

        // get posts
        getPostData("ajax_sort", true);
      })
    );
  }

  // add handler to "load more" button
  function loadMoreHandler() {
    load_more_btn.addEventListener("click", () => {
      //TODO: hide load__more button if no more posts

      // reset post offset
      query_options.post_offset += 2;

      // get posts
      getPostData("ajax_sort", query_options);
    });
  }

  // get posts from WP
  function getPostData(action, isCleanupNeeded) {
    const url = document.querySelector(".ajaxurl").textContent;
    $.ajax({
      url: url,
      type: "POST",
      data: {
        action: action, // functions.php
        query_options,
      },
      success: function (results) {
        // console.log(results);
        renderCatalogItems(isCleanupNeeded, results);
      },
    });
  }

  // create catalog item
  function createCatalogItem(itemData) {
    const {
      title,
      imgUrl,
      name1,
      name2,
      name3,
      value1,
      value2,
      value3,
      price,
    } = itemData;

    const catalog_item = document.createElement("DIV");
    catalog_item.classList.add("catalog__item");
    catalog_item.innerHTML = `<a href="#" class="catalog__link"></a>

    <div class="catalog__img">
      <img src="${imgUrl}" alt="${title}" />
    </div>

    <a href="#" class="catalog__button">Подробнее</a>

    <div class="catalog__info">
      <h4 class="catalog__header">${title}</h4>

      <div class="catalog__options">
        <div class="catalog__feature">
          <p class="catalog__name">${name1}</p>
          <p class="catalog__value">${value1}</p>
        </div>

        <div class="catalog__feature">
          <p class="catalog__name">${name2}</p>
          <p class="catalog__value">${value2}</p>
        </div>

        <div class="catalog__feature">
          <p class="catalog__name">${name3}</p>
          <p class="catalog__value">${value3}</p>
        </div>
      </div>
      <!-- /.catalog__info -->

      <p class="catalog__price">${price} BYN</p>
    </div>
    <!-- /.catalog__info -->`;

    return catalog_item;
  }

  function renderCatalogItems(isCleanupNeeded, postsData) {
    const isPostsExisct = postsData.length > 1;
    if (isPostsExisct) {
      // remove nofound message
      // catalog_nofound.classList.remove("active");

      // cleanup posts container if it's need
      if (isCleanupNeeded) {
        catalog_wrapper.innerHTML = "";
      }

      // extract posts data
      const serviceData = postsData[0];
      const data = postsData.slice(1);

      const catalog_elements = data.map((itemData) =>
        createCatalogItem(itemData)
      );

      const fragment = document.createDocumentFragment();

      catalog_elements.forEach((el) => fragment.append(el));

      catalog_wrapper.append(fragment);
    } else {
      console.log("no found");
      // show nofound message
      // catalog_nofound.classList.add("active");
    }
  }
});
