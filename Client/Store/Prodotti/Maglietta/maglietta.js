Vue.component('maglietta', {
    template : '<div class="product"><div class="product-image "><img v-bind:src="image"/></div><div class="product-info"><h1>Prodotto in vendita:{{product}}</h1>Descrizione:{{description}}<p v-if="disp>10 && onSale">Disponibile</p><p v-else-if="disp>0 && onSale">Ultime scorte!</p><p v-else>Non disponibile</p><ul><li v-for="x in details">{{x.text}}</li></ul><div v-for="(x,index) in variants" :key="x.id" class="color=box"v-bind:style="{backgroundColor: x.htmlColor}"><p v-on:click="updateProduct(index)">{{x.color}}</p></div><button v-on:click="addToCart()"v-bind:disabled="!onSale || disp==0"v-bind:class="{disabledButton: !onSale || disp==0}">Aggiungi al carrello</button></div></div>'
    ,
    data: function(){
        return {
            product : 'Maglietta' ,
            description: "Maglietta WildFishing" ,
            selectedVariant : 0,
            details : [
                { text: "95% Cotone - 5% Elastan" } ,
                { text: " Lavabile e riutilizzabile " } ,
                { text: "Utilizzo ad uso civile, non medicale" }
                ],
            variants : [
                { id:2241 , color: "nera" , disp:9 , onSale : true ,
                image:"../../../img/maglietta_front" , htmlColor: "white" } ,
                { id:2242, color:"nera", disp:11, onSale:false ,
                image:"../../../img/maglietta_back",htmlColor:"black" } ,
                ]
        } ;
    } ,
    methods: {
        addToCart:function(){
            this.variants[this.selectedVariant].disp-=1;
            this.$emit("add-to-cart");
        } ,
        updateProduct:function(i){
            this.selectedVariant=i;
        }
    } ,
    
    computed: {
        onSale:function(){
            return this.variants[this.selectedVariant].onSale;
        } ,
        disp:function(){
            return this.variants[this.selectedVariant].disp ;
        } ,
        image:function(){
        return this.variants[this.selectedVariant].image;
        }
    }
});
var app = new Vue ({
    el:'#app' ,
    data : {
        cart : 0
    } ,
    methods : {
        updateCart:function() {
            this.cart += 1 ;
        }
    }
});