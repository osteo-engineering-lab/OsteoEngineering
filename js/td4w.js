    $(document).ready(function(){

        $.ionSound({
            sounds: [
                "td4w",
                "bell_ring"
            ],
            path: "sounds/",
            multiPlay: true,
            volume: "1.0"
        });

        $("#alternate").on("click", function(){
            $.ionSound.play("td4w");
        });
    });