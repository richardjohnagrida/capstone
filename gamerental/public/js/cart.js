/*
    {
        '<itemId>' : <item details>,
    }
*/
const imagePath = "http://localhost:8000/images/";

const addToCart = ( item, gameCard ) => {
    if ( ! item) {
        return false;
    }
    const {game_id: id} = item;
    const cart = getCart();
    if (!cart[id]) {
        cart[id] = {};
    }
    cart[id] = item; //
    localStorage.setItem('cart', JSON.stringify(cart));
    gameCard.find("button.remove-to-cart").show();
    gameCard.find("button.add-to-cart").hide();
}

const removeToCart = (id, gameCard) => {
    if ( ! id) {
        return false;
    }
    const cart = getCart();
    if (cart[id]){
        delete cart[id];
        localStorage.setItem('cart', JSON.stringify(cart)); 
        gameCard.find("button.remove-to-cart").hide();
        gameCard.find("button.add-to-cart").show();
    }
}


const getCart = () => {
    let cart = localStorage.getItem('cart');
    if ( ! cart) {
        cart = "{}";
    }
    cart = JSON.parse(cart);

    return cart;
}

const checkIfExists = (id) => {

    let isExisting = false;

    const cart = getCart();
    if ( ! cart) {
        return false;
    }
    isExisting = cart[id] ? true : false;
    return isExisting;
}


const updateAddToCartButtonState = () => {
  
    $("div.game-card").each(function(index){
        const elem = $(this);
        const tmpGameInfo = elem.find("input[name='game_info']").val();
       
        if (tmpGameInfo) {
            try {
                const gameInfo = JSON.parse(tmpGameInfo);
                const isGameExists = checkIfExists(gameInfo.game_id); 
                if (isGameExists) {
                    elem.find("button.remove-to-cart").show();
                    elem.find("button.add-to-cart").hide();
                } else {
                    elem.find("button.remove-to-cart").hide();
                    elem.find("button.add-to-cart").show();
                }

            } catch (e) {
                console.log("Carry on! ")
            }
        
        }
    });
}


const renderCart = () => {
    const cart = getCart();
    const isCartEmpty = Object.keys(cart).length === 0;
  
    if (isCartEmpty) {

        // do something here if cart is empty

        return;
    }
   

    const cartItemTemplate = $(".cart-item[template]");
    Object.keys(cart).forEach(itemId => {
        const item = cart[itemId];
        const cloned = cartItemTemplate.clone();
        cloned.find(".game-name").html(item.name);
        cloned.find(".console-type").html(item.console_name);
        cloned.find(".price").html(item.price_per_week);
        cloned.find(".game-id").val(item.game_id);
        cloned.find(".game-img").attr("src", `${imagePath}${item.cover_img}`);
        cloned.attr({
            "game-id" : item.game_id, 
            "price" : item.price_per_week
        });
        cloned.removeAttr("template");
        cloned.show();
        
        cloned.appendTo($("#cart-item-container"));
    });

}


const selectItemsToCheckout = (e) => {
    e.stopPropagation();
    let totalPrice = 0;
    $("input:hidden.frm-item-ids").remove();
    $("div.cart-item").has("input[type='checkbox'].individual:checked").each(function(){

        const itemPrice = parseFloat($(this).attr("price"));
        const itemId = $(this).attr("game-id");

        if (! itemId) {
            return;
        }
        totalPrice += itemPrice;
 
        $("form#checkout").append(
            $("<input class = 'frm-item-ids' type='hidden' name='itemIds[]' value='" + itemId + "'/>")
        );
        $("input[name=total_amount]").val(totalPrice);
        $(".lbl-total-amount").html(totalPrice);
    });
}

$(document).ready(function() {
    const currPage = window.location.href;
    
    if (currPage.match("shop")) {
    
        updateAddToCartButtonState();
        $("button.add-to-cart").on('click', function(e){
            e.stopPropagation();
            e.preventDefault();
            let gameCard = $(this).closest("div.game-card")
            let game = gameCard.find("input[name='game_info']").val();
            if (game) {
                game = JSON.parse(game);
                addToCart(game, gameCard);
            }
        });
    
        $("button.remove-to-cart").on('click', function(e) {
            e.stopPropagation();
            e.preventDefault();
            let gameCard = $(this).closest("div.game-card")
            let game = gameCard.find("input[name='game_info']").val();
    
            if (game) {
                game = JSON.parse(game);
                removeToCart(game.game_id, gameCard);
            }
        });
    } else  if (currPage.match('cart')) {
        // do cart stuff here
        renderCart();
        $("input[type=checkbox].individual, input:checkbox.selectall").on("click",selectItemsToCheckout);
        $("#rent-out").click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            localStorage.clear("cart");
            $("form#checkout").submit();
        })
    }

    



});

