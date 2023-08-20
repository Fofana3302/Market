<?php
session_start();
include('config/conx.php');



if(isset($_POST['addbtn']))
{
   
    if(empty($_POST['libCat'] ))
    { $_SESSION['vide'] = " Veuillez remplir le Champ vide";
        header('Location: categories.php'); }

    else{  
    $libcat = $_POST['libCat'];
    
     $query = "INSERT INTO categorie (libCat) VALUES ('$libcat')";
     $query_run = mysqli_query($conn, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Catégorie ajoutée avec succès !";
                header('Location: categories.php'); 
            }
            else 
            {
                $_SESSION['status'] = "Erreur Catégorie non ajoutée !!!";
                $_SESSION['status_code'] = "error";
                header('Location: categories.php');  
            }
        }
       
    }


if(isset($_POST['deletebtn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM nivetude WHERE idNiv='$id' ";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        // echo "Saved";
        $_SESSION['success'] = "Niveau supprimé";
        header('Location: niveau.php'); 
    }
    else 
    {
        $_SESSION['status'] = "Niveau non supprimé";
        $_SESSION['status_code'] = "error";
        header('Location: niveau.php');  
    } 
}

?>