$().ready(function () {
    // our pizza variable
    let ordine = {
        cost: 0.00,
        bot: []
    };

    let ordineFlag = 0;

    // getting the table and assigning it to a variable, making it a jQuery object
    let cartTable = $('#cart-table');
    // getting the total price label and making it a jQuery object.
    let totalLabel = $('.cart-total-price');

    //adding toppings to pizza
    $('[id^=bot-]').click(function () {
        if (ordine == 0) {
            alert("Aggiungi un prodotto.");
        } else {
            // splitting out the id as a name
            let bot = this.id.split('-')[1];
            // adding the topping name to the pizza topping array
            ordine.bot.push(bot);
            // adding the topping cost to the pizza cost, then changing the total text to reflect the new price
            ordine.cost += $('#' + bot).data().cost;
            totalLabel.text('€' + ordine.cost);
            // creating a table row with the topping name and cost, appending to the table
            cartTable.append(
                "<tr>" +
                "<td> " + bot + " </td> " +
                "<td> " + $('#' + bot).data().cost + " </td> " +
                "<td> 1 </td> " +
                "<tr>"
            );
        }
        // logging out the pizza to the console
        console.log(ordine);
    });

    // adding a pizza
    $('#ordine-btn').click(function () {
        if (ordineFlag == 1) {
            alert('Hai selezionato solo le spese di spedizione.');
        } else {
            ordineFlag = 1;
            ordine.cost += 10;
            console.log(ordine);
            cartTable.append(
                "<tr>" +
                "<td> Spedizione </td> " +
                "<td> 10 </td> " +
                "<td> 1 </td> " +
                "<tr>"
            );
            totalLabel.text('€10');
        }

    });



});