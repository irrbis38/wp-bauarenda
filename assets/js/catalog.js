document.addEventListener("DOMContentLoaded", function () {
  const index_page = document.querySelector(".index__page");
  if (index_page) {
    initCatalog(16);
  }

  const our_clients_page = document.querySelector(".our-clients__page");
  if (our_clients_page) {
    initCatalog(4);
  }
});

// INIT CATALOG
function initCatalog(posts_per_page) {
  const catalog_wrapper = document.querySelector(".catalog__wrapper");
  const load_more_btn = document.querySelector(".catalog__more");
  const catalog_categories = Array.from(
    document.querySelectorAll(".catalog__category")
  );
  const catalog_sort = document.querySelector(".catalog__sort");
  const catalog_sort_items = Array.from(
    document.querySelectorAll(".catalog__sort-item")
  );
  const sort_type_item = document.querySelector(".catalog__sort-type");
  const catalog_nofound = document.querySelector(".catalog__nofound");

  // options for query to get posts
  const query_options = {
    selected_category: "all",
    sort_type: "catalog__popularity",
    sort_order: "DESC",
    post_offset: 0,
    posts_per_page: posts_per_page,
    search_string: "",
  };

  let page_number = 1;
  let pages_amount = 1;
  let posts_amount = 0;

  selectCategory();
  showCatalogSortList();
  hideCatalogSortList();
  selectSortOptions();

  // select catalog category
  function selectCategory() {
    catalog_categories.forEach((el) =>
      el.addEventListener("click", (e) => {
        const isActive = e.target.classList.contains("active");
        if (!isActive) {
          page_number = 1;

          catalog_categories.forEach((item) => item.classList.remove("active"));
          e.target.classList.add("active");

          // set category
          query_options.selected_category = e.target.dataset.type;

          // reset post offset
          query_options.post_offset = 0;

          // get posts
          getPostData("ajax_sort", true);
        }
      })
    );
  }

  // show and hide catalog sort list by hover

  function showCatalogSortList() {
    catalog_sort.addEventListener("mouseenter", () => {
      catalog_sort.classList.add("active");
    });
  }

  function hideCatalogSortList() {
    catalog_sort.addEventListener("mouseleave", () => {
      catalog_sort.classList.remove("active");
    });
  }

  // hide catalog sort list by click category
  catalog_sort_items.forEach((item) =>
    item.addEventListener("click", () =>
      catalog_sort.classList.remove("active")
    )
  );

  // select sort-item
  function selectSortOptions() {
    const sortOptions = document.querySelectorAll(".catalog__sort-item");

    sortOptions.forEach((option) =>
      option.addEventListener("click", handleSelectSortOptions)
    );
  }

  function handleSelectSortOptions(event) {
    const text = event.target.dataset.text;
    if (sort_type_item.textContent !== text) {
      page_number = 1;

      sort_type_item.textContent = text;

      const sort_type = event.target.dataset.type;

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
    }
  }

  // add handler to "load more" button
  load_more_btn.addEventListener("click", () => {
    //TODO: hide load__more button if no more posts

    // reset post offset
    query_options.post_offset += query_options.posts_per_page;

    page_number += 1;

    // get posts
    getPostData("ajax_sort", false);
  });

  //=================== CATALOG SEARCH

  // function - decorator
  function debounce(callee, timeoutMs) {
    return function perform(...args) {
      let previousCall = this.lastCall;
      this.lastCall = Date.now();

      if (previousCall && this.lastCall - previousCall <= timeoutMs) {
        clearTimeout(this.lastCallTimer);
      }

      this.lastCallTimer = setTimeout(() => callee(...args), timeoutMs);
    };
  }

  // function that handles data input
  function handleSearchInput(e) {
    query_options.search_string = e.target.value;

    // get posts
    getPostData("ajax_sort", true);
  }

  // if time between keypress less than 250ms handleSearchInput doesn't execute
  const debouncedHandle = debounce(handleSearchInput, 250);

  // add listener to catalog search input
  const catalog_input = document.querySelector(".catalog__input");
  catalog_input.addEventListener("input", debouncedHandle);

  //=================== CATALOG RENDER FUNCTIONS
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
      catalog_nofound.classList.remove("active");

      // show catalog__more button
      load_more_btn.classList.remove("hidden");

      // cleanup catalog_wrapper if it's need
      if (isCleanupNeeded) {
        catalog_wrapper.innerHTML = "";
      }

      // hide load__more button if no more posts
      posts_amount = postsData[0].length;

      pages_amount = Math.ceil(posts_amount / query_options.posts_per_page);

      if (page_number >= pages_amount) {
        load_more_btn.classList.add("hidden");
      }

      // extract posts data

      const data = postsData.slice(1);

      // create catalog items
      const catalog_elements = data.map((itemData) =>
        createCatalogItem(itemData)
      );

      const fragment = document.createDocumentFragment();

      catalog_elements.forEach((el) => fragment.append(el));

      catalog_wrapper.append(fragment);
    } else {
      if (isCleanupNeeded) {
        // cleanup catalog_wrapper
        catalog_wrapper.innerHTML = "";

        // show nofound message
        catalog_nofound.classList.add("active");

        // show catalog__more button
        load_more_btn.classList.add("hidden");
      } else {
        // show catalog__more button
        load_more_btn.classList.add("hidden");
      }
    }
  }

  // ================= GET POST FROM WORDPRESS DATABASE
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
}
