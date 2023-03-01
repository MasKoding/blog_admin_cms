<?php 

 function showAllBookUser(){
        
    // panggil global variable connect
    global $connect;
    $resultSlide1 = $connect->query("SELECT * FROM book");
   
    if($resultSlide1->num_rows>0){
        
        while ($row = $resultSlide1->fetch_assoc()) {
            $id = $row['id'];
            $judul = $row['title'];
            $filename = $row['filename'];
            $tanggal = $row['release_date'];
            $deskripsi = $row['description'];
            $rating = $row['rating'];
            $author = $row['author'];
            
            echo '
            <div class="books">
            <div>
                <img src="'.$filename.'" alt="" class="book-img">
            </div>
            <div class="descp">
                <h2 class="book-name">'.$judul.'</h2>
                <h3 class="author">by '.$author.'</h3>
                <h3 class="author">by '.$tanggal.'</h3>
                <h3 class="rating">'.$rating.' rating</h3>
                <p class="info">
                    '.$deskripsi.'
                </p>
                <button type="button" onclick="lihatBuku('.$id.')">See the Book</button>
            </div>
        </div>
            ';
        }
        }
    
    
 }

 function detailUlasan($id){
    global $connect;
    $result = $connect->query("SELECT * FROM ulasan WHERE id='$id'");
    $row = $result->fetch_assoc();

    $judul = $row['judul'];
    $filename = $row['image'];
    $deskripsi = $row['deskripsi'];
    $created_time = $row['tanggal'];
    
    echo '
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">'.$judul.'</h5>
        <p class="badge bg-secondary">Waktu Post:'.$created_time.'</p>
        <hr>
        <img src="'.$filename.'" class="img-fluid"   
        >
    </div>
   </div>
   <br>
   <div class="card">
    <div class="card-body">
        <h5 class="card-title">Deskripsi</h5>
        <hr>
        <p>'.$deskripsi.'</p>
    </div>
   </div> 
    ';
}


function showAllBookAdmin(){
        
    // panggil global variable connect
    global $connect;
    $resultSlide1 = $connect->query("SELECT * FROM book");
   
    if($resultSlide1->num_rows>0){
        
        while ($row = $resultSlide1->fetch_assoc()) {
            $id = $row['id'];
            $judul = $row['title'];
            $filename = $row['filename'];
            $tanggal = $row['release_date'];
            $deskripsi = $row['description'];
            $rating = $row['rating'];
            $author = $row['author'];
            
            echo '
            <div class="books">
            <div>
                <img src="'.$filename.'" alt="" class="book-img">
            </div>
            <div class="descp">
                <h2 class="book-name">'.$judul.'</h2>
                <h3 class="author">by '.$author.'</h3>
                <h3 class="author">by '.$tanggal.'</h3>
                <h3 class="rating">'.$rating.' rating</h3>
                <p class="info">
                    '.$deskripsi.'
                </p>
                <button type="button" onclick="lihatBuku('.$id.')">See the Book</button>
                <button type="button" onclick="editBuku('.$id.')">Edit the Book</button>
                
            </div>
        </div>
            ';
        }
        }
    
    
 }

?>
