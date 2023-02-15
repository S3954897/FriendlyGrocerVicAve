

$(document).ready(function() {
    $.ajax({
        url: 'phpMain.php',
        type: 'POST',
        data: { trigger: 'true' },
        success: function(data) {
            var result = JSON.parse(data);
            result.forEach(function(element, index) {
                console.log("Element at index " + index + ": " + element);
            });
        }
    });
});
