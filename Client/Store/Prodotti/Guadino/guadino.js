Vue.component('guadino', {
    template : `<div class="product">
                    
                    <img v-bind:src="image" align="left"/>
                    <div class="product-info" >    
                    <h1>{{product}}</h1>
                    Descrizione:{{description}}
                    <p v-if="disp>10 && onSale">Disponibile</p>
                    <p v-else-if="disp>0 && onSale">Ultime scorte!</p>
                    <p v-else>Non disponibile</p>
                    <li v-for="x in details">{{x.text}}</li>
                    <br>
                    
                    
                    <div id="button">
                    <button id="cart" v-on:click="addToCart()"v-bind:disabled="!onSale || disp==0"v-bind:class="{disabledButton: !onSale || disp==0}">Aggiungi al carrello</button>
                    </div>
                    </div>
                </div>`
    ,
    data: function(){
        return {
            product : 'Guadino' ,
            description: 'Canna spinning a due pezzi' ,
            selectedVariant : 0,
            details : [
                { text: '95% Cotone - 5% Elastan' } ,
                { text: ' Lavabile e riutilizzabile ' } ,
                { text: 'Utilizzo ad uso civile, non medicale' }
                ],
            variants : [
                { id:2241 , color:'NERA', disp:20 , onSale:true ,
                image:'guadino.png' } 
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
        cart : 0,
        
    } ,
    methods : {
        updateCart:function() {
            this.cart += 1 ;
        }
    }
});


function openNav() {
    document.getElementById("comparsa").style.width = "230px";
    document.getElementById("main").style.marginLeft = "230px";
  }
  
  function closeNav() {
    document.getElementById("comparsa").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    
  }