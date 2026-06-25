<!DOCTYPE HTML>



<div class="card shadow-sm border-0 my-4">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center border-bottom-0">
        <h5 class="mb-0 text-secondary fw-bold">Manage Posts</h5>
        
        <div class="laravel-pagination">
            {{ $posts->links() }}
        </div>
    </div>
    
    <div class="card-body p-0">
        <div class="table-responsive">
            <table id="my-table" class="table table-hover align-middle mb-0" style="width:100%">
                <thead class="table-light text-uppercase fs-7 fw-semibold text-muted">
                    <tr>
                        <th scope="col" class="ps-4 py-3">Title</th>
                        <th scope="col" class="ps-4 py-3">Body</th>
                        <th scope="col" class="text-end pe-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td class="ps-4 py-3 fw-medium text-dark">
                                {{ $post->title }}
                            </td>
                            <td class=" pe-4 py-3">
                                {{ $post->body }}
                            </td>
                            <td class="text-end pe-4 py-3">
                                <a href="{{ route('post.index', ['id' => $post->id]) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 transition-all">
                                    <i class="fas fa-eye me-1"></i> View Post
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.3.8/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/2.3.8/js/dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/2.3.8/js/dataTables.bootstrap5.min.js"></script>

<style>
    /* Shrinks the upper case table headers slightly for a premium feel */
    .fs-7 { font-size: 0.8rem; letter-spacing: 0.5px; }
    
    /* Adds a smooth hover transition to your buttons */
    .transition-all { transition: all 0.2s ease-in-out; }
    
    /* Cleans up standard DataTables clutter to match modern design */
    .dataTables_wrapper .dataTables_length, 
    .dataTables_wrapper .dataTables_filter {
        padding: 1rem 1.5rem;
    }
    .dataTables_wrapper .dataTables_info, 
    .dataTables_wrapper .dataTables_paginate {
        padding: 1rem 1.5rem;
    }
</style>

<script>
$(document).ready(function() {
    $('#my-table').DataTable();
    
    // Style the DataTables search input to look like native Bootstrap controls
    //$('.dataTables_filter input').addClass('form-control form-control-sm rounded- 0');
});
</script>