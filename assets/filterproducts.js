document.addEventListener("DOMContentLoaded", function () {
	const categorySelect = document.getElementById("categorySelect");
	const searchInput = document.getElementById("searchInput");
	const products = document.querySelectorAll(".product");

	categorySelect.addEventListener("change", filterProducts);
	searchInput.addEventListener("input", filterProducts);

	function filterProducts() {
		const selectedCategory = categorySelect.value.toLowerCase();
		const searchTerm = searchInput.value.toLowerCase();

		products.forEach(function (product) {
			const productCategory = product
				.getAttribute("data-category")
				.toLowerCase();
			const productName = product.querySelector(".product-name");

			const categoryMatch =
				selectedCategory === "all" || productCategory === selectedCategory;
			const searchMatch = productName.textContent
				.toLowerCase()
				.includes(searchTerm);

			if (categoryMatch && searchMatch) {
				product.style.display = "block";
			} else {
				product.style.display = "none";
			}
		});
	}

	// Initial filtering on page load
	filterProducts();
});
