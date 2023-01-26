<!--
Todo
Immaginare quali sono le classi necessarie per creare uno shop online 
con le seguenti caratteristiche:

- L'e-commerce vende **prodotti** per animali
- I prodotti sono categorizzati, le **categorie** sono Cani o Gatti
- I prodotti saranno suddivisi anche per **tipologia** come cibo, giochi, cucce, etc

Stampiamo delle card contenenti i dettagli dei prodotti.

### BONUS
Aggiungere il concetto di **data di scadenza** del prodotto 
(non tutti i prodotti ne hanno una, vedi **giochi**).
Nel caso in cui la **data di scadenza** ci sia, 
e sia non piu' di distante di 7 giorni da oggi
scontare il prodotto del 30%. 
-->


<?php
// animale
class Categoria
{

    private $nomeCateg;


    public function __construct(
        $nomeCateg

    ) {

        $this->setNomeCateg($nomeCateg);
    }



    public function getNomeCateg()
    {

        return $this->nomeCateg;
    }
    public function setNomeCateg($nomeCateg)
    {

        $this->nomeCateg = $nomeCateg;
    }



    public function getHtml()
    {

        return $this->getNomeCateg() . "<br>";
    }
}

// croccantini, cucce...
class Prodotto
{

    private Categoria $categoria;
    private $nomeProd;
    private $prezzo;
    private $peso;


    public function __construct(
        $categoria,
        $nomeProd,
        $prezzo,
        $peso

    ) {

        $this->setCategoria($categoria);
        $this->setNomeProd($nomeProd);
        $this->setPrezzo($prezzo);
        $this->setPeso($peso);
    }



    public function getCategoria()
    {

        return $this->categoria;
    }
    public function setCategoria($categoria)
    {

        $this->categoria = $categoria;
    }




    public function getNomeProd()
    {

        return $this->nomeProd;
    }
    public function setNomeProd($nomeProd)
    {

        $this->nomeProd = $nomeProd;
    }



    public function getPrezzo()
    {

        return $this->prezzo . "€";
    }
    public function setPrezzo($prezzo)
    {

        $this->prezzo = $prezzo;
    }




    public function getPeso()
    {

        return $this->peso;
    }
    public function setPeso($peso)
    {

        $this->peso = $peso;
    }



    public function getHtml()
    {

        return

            $this->getCategoria()->getHtml()
            .
            $this->getNomeProd() . "<br>"
            .
            $this->getPrezzo() . "<br>"
            .
            $this->getPeso() . " g<br>";
    }
}


class Cibo
{

    private Prodotto $prodotto;
    // data di scadenza
    private $anno;
    private $mese;
    private $giorno;


    public function __construct(
        $prodotto,
        $anno,
        $mese,
        $giorno

    ) {

        $this->setProdotto($prodotto);
        $this->setanno($anno);
        $this->setMese($mese);
        $this->setGiorno($giorno);
    }


    public function getProdotto()
    {

        return $this->prodotto;
    }
    public function setProdotto($prodotto)
    {

        $this->prodotto = $prodotto;
    }


    public function getAnno()
    {

        return $this->anno;
    }
    public function setAnno($anno)
    {

        $this->anno = $anno;
    }



    public function getMese()
    {

        return $this->mese;
    }
    public function setMese($mese)
    {

        $this->mese = $mese;
    }



    public function getGiorno()
    {

        return $this->giorno;
    }
    public function setGiorno($giorno)
    {

        $this->giorno = $giorno;
    }




    public function getHtml()
    {

        return
            $this->getProdotto()->getHtml()

            .
            $this->getGiorno() . "/"
            .
            $this->getMese() . "/"
            .
            $this->getAnno() . "<br>"
            .
            "---------------------<br>";
    }
}



// COSTRUISCO la categoria1
$categoria1 = new Categoria("Gatto");
// COSTRUISCO la categoria2
$categoria2 = new Categoria("Cane");


// COSTRUISCO il prodotto1
$prodotto1 = new Prodotto($categoria1, "croccantini", 12.3, 18);
// COSTRUISCO il prodotto2
$prodotto2 = new Prodotto($categoria2, "croccantini", 25.50, 30);

// COSTRUISCO il prodotto3
$prodotto3 = new Prodotto($categoria1, "cuccia", 23.00, 120);
// COSTRUISCO il prodotto4
$prodotto4 = new Prodotto($categoria2, "cuccia", 45.00, 300);



// COSTRUISCO il cibo1
$cibo1 = new Cibo($prodotto1, 2023, 7, 12);
// COSTRUISCO il cibo2
$cibo2 = new Cibo($prodotto2, 2023, 7, 12);


echo $cibo1->getHtml();

echo $cibo2->getHtml();
echo $prodotto3->getHtml();
echo $prodotto4->getHtml();




echo "<br><br>okkk";
