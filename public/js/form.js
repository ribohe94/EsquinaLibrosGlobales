/**
 * Created by root on 29/10/16.
 */
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight) + "px";
}

function typeahead() {
    var path = "{{route('autocomplete')}}";
    $('input.typehead').typeahead({
        source: function (query, process) {
            return $.get(path, {query: query}, function (data) {
                return process(data);
            });
        }
    });
}

