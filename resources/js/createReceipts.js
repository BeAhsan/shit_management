document.addEventListener('DOMContentLoaded', function(){
    let itemCount = 1;

    document.getElementById('add-item').addEventListener('click', function() {
        const container = document.getElementById('items-container');
        const newItem = document.createElement('div');
        newItem.className = 'item mb-4 p-4 border rounded-lg';
        newItem.innerHTML = `
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-2">
                    <div>
                        <label class="block text-gray-700 mb-2">Item Name</label>
                        <input type="text" name="items[${itemCount}][name]" required class="w-full px-3 py-2 border rounded-lg">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Quantity</label>
                        <input type="number" name="items[${itemCount}][quantity]" required min="1" class="w-full px-3 py-2 border rounded-lg">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Price</label>
                        <input type="number" name="items[${itemCount}][price]" required min="0" step="0.01" class="w-full px-3 py-2 border rounded-lg">
                    </div>
                </div>
                <button type="button" class="remove-item bg-red-500 text-white px-3 py-1 rounded-lg text-sm">Remove</button>
            `;
        container.appendChild(newItem);
        itemCount++;
    });

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-item')) {
            e.target.closest('.item').remove();
        }
    });
});

