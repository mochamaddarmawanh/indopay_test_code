function blockUiStyle() {
    $.blockUI({
        message: "Tunggu bentar geng...",
        css: {
            backgroundColor: 'transparent',
            color: '#fff',
            padding: '25px'
        }
    });
}

// function select_category(category) {

//     blockUiStyle();

//     let checked_countries = [];
//     document.querySelectorAll('input[name="country"]:checked').forEach(function(checkbox) {
//         checked_countries.push(checkbox.value);
//     });

//     $.ajax({
//         url: '/filtering',
//         data: {
//             _token: document.querySelector('meta[name="_token"]').getAttribute('content'),
//             category: category,
//             q: document.querySelector('input[name="search"]').value ?? null,
//             country: checked_countries.length === 0 ? null : checked_countries
//         },
//         method: 'GET',
//         success: function(response) {

//             console.log(response)

//             $.unblockUI();
//         },
//         error: function(xhr, status, error) {

//             console.log(error)

//             $.unblockUI();
//         }
//     });
// }

function update_search_link() {
    let search_value = document.getElementById('search').value;
    let current_url = new URL(window.location.href);
    current_url.searchParams.set('q', search_value);
    document.getElementById('search_button').setAttribute('href', current_url.toString());
}

function update_country() {
    let selected_countries = [];
    let checkboxes = document.querySelectorAll('input[name="country"]:checked');
    checkboxes.forEach(function(checkbox) {
        selected_countries.push(checkbox.value);
    });
    let current_url = new URL(window.location.href);
    current_url.searchParams.set('country', selected_countries.join(','));
    document.getElementById('filter_country').setAttribute('href', current_url.toString());
}

function update_category(category) {
    let current_url = new URL(window.location.href);
    current_url.searchParams.set('category', category);
    let selected_countries = current_url.searchParams.get('country');
    if (selected_countries) {
        current_url.searchParams.set('country', selected_countries);
    }
    window.location.href = current_url.toString();
}

