document.addEventListener("DOMContentLoaded", function () {
	const categorySelect = document.getElementById("categorySelect");
	const stocksDataInput = document.getElementById("stocksData");
	const categories = JSON.parse(stocksDataInput.value);

	categorySelect.addEventListener("change", filterStocks);

	function filterStocks() {
		const selectedCategory = categorySelect.value;

		categories.forEach(function (category) {
			const categoryDiv = document.getElementById(category);

			if (selectedCategory === "All" || category === selectedCategory) {
				categoryDiv.style.display = "block";
			} else {
				categoryDiv.style.display = "none";
			}
		});
	}
});
