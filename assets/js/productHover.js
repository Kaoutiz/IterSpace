export function productHover(){

    let video_product = document.getElementsByClassName("video-bracelet");

    for(let i = 0; i < video_product.length; i++){

        // On récupère le hover sur le produit
        video_product[i].addEventListener("mouseover", function(){

            // On action le play sur la vidéo concerné
            video_product[i].children[0].children[0].play();
        });
    }
}