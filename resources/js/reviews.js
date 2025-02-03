document.addEventListener("DOMContentLoaded", function () {
    fetchReviews();
});

// Fetch and Display Reviews (GET)
function fetchReviews() {
    axios.get('/api/reviews')
        .then(response => {
            let reviews = response.data;
            let reviewsHtml = '';

            reviews.forEach(review => {
                reviewsHtml += `
                    <div class="py-6 bg-white rounded-md shadow review-item">
                        <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b">
                            <div class="flex items-center px-6 mb-2 md:mb-0">
                                <div class="flex mr-2 rounded-full">
                                    <img src="${review.customer_image || 'https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg'}" 
                                         alt="Customer" class="object-cover w-12 h-12 rounded-full">
                                </div>
                                <div>
                                    <h2 class="text-lg font-semibold text-gray-900">${review.customer_name}</h2>
                                    <p class="text-xs text-gray-500">${review.status || "Happy Customer"}</p>
                                </div>
                            </div>
                        </div>
                        <p class="px-6 mb-6 text-base text-gray-500">${review.review_text}</p>
                        <h2 class="text-sm text-gray-500 px-6">Rating: <span class="font-semibold text-gray-600">${review.rating}</span></h2>
                    </div>
                `;
            });

            document.getElementById('review-section').innerHTML = reviewsHtml;
        })
        .catch(error => console.error('Error fetching reviews:', error));
}
function addReview() {
    let reviewData = {
        customer_name: document.getElementById('name').value,
        review_text: document.getElementById('text').value,
        rating: document.getElementById('rating').value
    };

    axios.post('/api/reviews', reviewData)
        .then(response => {
            alert('Review added successfully!');
            document.getElementById('name').value = "";
            document.getElementById('text').value = "";
            document.getElementById('rating').value = "";

            // Instead of reloading, update the reviews dynamically
            let newReview = response.data;

            let reviewHtml = `
                <div class="py-6 bg-white rounded-md shadow review-item">
                    <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b">
                        <div class="flex items-center px-6 mb-2 md:mb-0">
                            <div class="flex mr-2 rounded-full">
                                <img src="${newReview.customer_image || 'https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg'}" 
                                     alt="Customer" class="object-cover w-12 h-12 rounded-full">
                            </div>
                            <div>
                                <h2 class="text-lg font-semibold text-gray-900">${newReview.customer_name}</h2>
                                <p class="text-xs text-gray-500">${newReview.status || "Happy Customer"}</p>
                            </div>
                        </div>
                    </div>
                    <p class="px-6 mb-6 text-base text-gray-500">${newReview.review_text}</p>
                    <h2 class="text-sm text-gray-500 px-6">Rating: <span class="font-semibold text-gray-600">${newReview.rating}</span></h2>
                </div>
            `;

            document.getElementById('review-section').innerHTML = reviewHtml + document.getElementById('review-section').innerHTML;
        })
        .catch(error => console.error('Error adding review:', error));
}
