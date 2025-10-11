// Bootstrap Tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    var title = tooltipTriggerEl.getAttribute('title') || tooltipTriggerEl.getAttribute('data-bs-title');

    if (title) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    }
});

// Bootstrap Popovers
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));

var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    var content = popoverTriggerEl.getAttribute('data-bs-content') || popoverTriggerEl.getAttribute('data-bs-html');
    var placement = popoverTriggerEl.getAttribute('data-bs-placement') || 'auto';

    if (content) {
        return new bootstrap.Popover(popoverTriggerEl, {
            trigger: 'click',
            placement: placement,
            html: true,
            sanitize: false,
        });
    }
});
