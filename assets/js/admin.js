jQuery(document).ready(function($) {
    // Initialize DataTables on the table with default descending order by "Created At" column
    $('table.wp-list-vchatbot').DataTable({
        paging: true,
        searching: true,
        ordering: true,
        info: true,
        pageLength: 10,
        order: [[3, 'desc']] // Assuming "Created At" is the 4th column (index 3)
    });
});
