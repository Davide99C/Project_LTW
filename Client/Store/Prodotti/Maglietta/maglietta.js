//PARAMETRI GLOBALI
var x = new URLSearchParams(window.location.search);
var carr= parseInt(x.get('carrello'));
var username = x.get('nome');
var surname = x.get('cognome');
var email = x.get('email');


Vue.component('maglietta', {
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
                    <div v-for="(x,index) in variants" :key="x.id" class="colorbox" >
                        <button id="f-r" v-on:click="updateProduct(index)">{{x.color}}</button>
                    </div>
                    
                    <div id="button">
                    <button id="cart" v-on:click="addToCart()"v-bind:disabled="!onSale || disp==0"v-bind:class="{disabledButton: !onSale || disp==0}">Aggiungi al carrello</button>
                    </div>
                    </div>
                </div>`
    ,
    data: function(){
        return {
            product : 'Maglietta' ,
            description: 'Maglietta WildFishing' ,
            selectedVariant : 0,
            details : [
                { text: '95% Cotone - 5% Elastan' } ,
                { text: ' Lavabile e riutilizzabile ' } ,
                { text: 'Utilizzo ad uso civile, non medicale' }
                ],
            variants : [
                { id:2241 , color:'NERA', disp:20 , onSale:true ,
                image:'black.png' } ,
                { id:2242, color:'BIANCA', disp:20, onSale:true ,
                image:'white.png' } ,
                ],
            
            
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
            //this.cart += 1 ;
            carr=carr+1;
            document.getElementById("carr").innerHTML = "<button href='../../carrello.html'><p >Carrello ("+carr+")</p></button>";
            document.getElementById("negozio").href = "../../store.html?nome="+username+'&cognome='+surname+'&email='+email+'&carrello='+carr;
            console.log(carr);
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