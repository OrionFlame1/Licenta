<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit article number <b></b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../../controller/edit_article.php" method="post">
                    <textarea name="desc" id="edit" cols="30" rows="10">
                        
                    </textarea>
                    <input type="hidden" name="id">
                    <script>
                        $(document).ready(function() {
                        $('#edit').summernote(
                            {height: 300}
                        );
                        });
                    </script>
                    <input class="btn btn-primary mt-3" type="submit">
                </form>
            </div>
        </div>
    </div>
</div>