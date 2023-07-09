document.addEventListener("DOMContentLoaded", function () {
    const categorySelect = document.getElementById("categorySelect");
    const dateSelect = document.getElementById("dateSelect");
    const products = document.querySelectorAll(".product");

    categorySelect.addEventListener("change", filterProducts);
    dateSelect.addEventListener("change", filterProducts);

    function filterProducts() {
        const selectedCategory = categorySelect.value.toLowerCase();
        const selectedDate = dateSelect.value;

        products.forEach(function (product) {
            const productCategory = product.getAttribute("data-category").toLowerCase();
            const productDate = product.querySelector(".product-date").textContent;

            const categoryMatch = selectedCategory === "all" || productCategory === selectedCategory;
            const dateMatch = selectedDate === "" || compareDates(productDate, selectedDate);

            if (categoryMatch && dateMatch) {
                product.style.display = "table-row";
            } else {
                product.style.display = "none";
            }
        });
    }
    function compareDates(date1, date2) {
        const d1 = new Date(date1);
        const d2 = new Date(date2);

        return d1.toISOString().slice(0, 10) === d2.toISOString().slice(0, 10);
    }
    filterProducts();
});
