<div class="fluid-container p-3 m-2 bg-dark">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

        <div class="form-group">
            <label for="exampleFormControlInput1">Article Title</label>
            <input type="text" class="form-control bg-secondary text-light" name="articleTitle" id="exampleFormControlInput1" placeholder="Article Title">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Article Short Description</label>
            <input type="text" class="form-control bg-secondary text-light" name="articleShortDescription" id="exampleFormControlInput1" placeholder="Article Short Description">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Article Full Description</label>
            
            <textarea class="form-control bg-secondary text-light" name="articleFullDescription" id="exampleFormControlInput1" placeholder="Article Full Description"></textarea>

        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Article Image URL</label>
            <input type="text" class="form-control bg-secondary text-light" name="articleImageURL" id="exampleFormControlInput1" placeholder="Article Short Description">
        </div>

        
        <div class="form-group">
            <label for="exampleFormControlInput1">Article Video URL</label>
            <input type="text" class="form-control bg-secondary text-light" name="articleVideoURL" id="exampleFormControlInput1" placeholder="Article Short Description">
        </div>


        <div class="form-group">
            <label for="exampleFormControlSelect1">Article Category</label>
            <select class="form-control bg-secondary text-light" id="exampleFormControlSelect1">
            <option value="">-- SELECT NEWS CATEGORY --</option>
            <option value="1">Weather</option>
            <option value="2">Accident</option>
            <option value="3">Alert</option>
            </select>
        </div>

        <button class="form-control btn btn-primary">POST ARTICLE</button>

        <h3 id="error-message" class="text-danger"></h3>

    </form>
</div>


<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(
        isset($_POST['articleTitle']) &&
        isset($_POST['articleShortDescription']) &&
        isset($_POST['articleFullDescription']) &&
        isset($_POST['articleImageURL']) &&
        isset($_POST['articleVideoURL'])
    ){

        $articleTitle = $_POST['articleTitle'];
        $articleShortDescritipn = $_POST['articleShortDescription'];
        $articleFullDescription = $_POST['articleFullDescription'];
        $articleImageURL = $_POST['articleImageURL'];
        $articleVideoURL = $_POST['articleVideoURL'];

        if($articleTitle != "" &&
            $articleShortDescritipn != "" &&
            $articleFullDescription != "" &&
            $articleImageURL != "" &&
            $articleVideoURL != ""
        ){

            $myConn = getConnection();
            $articleQuery = "INSERT INTO articles 
                (UID, 
                RID,
                ArticleTitle, 
                ArticleShortDescription, 
                ArticleFullDescription, 
                ArticleImageURL, 
                ArticleVideoURL)

                VALUES (
                    1,
                    'userRefID-4253453534',
                    '$articleTitle',
                    '$articleShortDescritipn',
                    '$articleFullDescription',
                    '$articleImageURL',
                    '$articleVideoURL'
                )
                ";

            $articleResult = mysqli_query($myConn, $articleQuery);

            if($articleResult){
                ?>

                <script>
                    location.href = '/?page=articles';
                </script>

                <?php
            }else{
                ?>
                <script>
                    errorMessage = document.getElementById('error-message');
                    errorMessage.textContent = "Oops something went wrong article did not published!";
                </script>
                <?php
            }

        }else{
            ?>
            <script>
                errorMessage = document.getElementById('error-message');
                errorMessage.textContent = "Please don't leave any text empty!";
            </script>

            <?php
        }    
    }
}

?>