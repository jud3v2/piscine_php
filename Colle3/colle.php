<?php

class C3PO extends Robot {
    /**
     * @var int
     */
    protected static int $numeroDeSerie = 0;
    /**
     * @var string
     */
    private string $nom;

    /**
     * @var mixed
     */
    private string $type;

    /**
     * @description construct ("name", "type")
     * @param string $nom
     * @param string $type
     */
    public function __construct(string $nom, string $type = "droide de protocole")
    {

        self::$numeroDeSerie++;

        $this->nom = $nom;
        $this->type = $type;
        echo "Je suis le droïde de protocole numéro ".self::$numeroDeSerie.", enchanté de vous rencontrer !".PHP_EOL;
    }

    /**
     * @description getter Name
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @description setter Name
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @description getter Type
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @description Type setter
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @description méthode demandé dans le sujet
     * @param string $str
     * @return void
     */
    public function dire(string $str): void
    {
        $str = str_replace('"', "", $str);
        echo "C3PO no ".self::$numeroDeSerie." : $str".PHP_EOL;
        $this->initierProtocole();
    }

    /**
     * @description méthode demandé dans le sujet
     * @return void
     */
    public function marcher(): void
    {
        echo "Je me mets en route, inutile d’insister.".PHP_EOL;
        parent::marcher();
        $this->initierProtocole();
    }

    /**
     * @description Permet d'initier le protocole.
     * @param $show
     * @return void
     */
    public function initierProtocole($show = false): void
    {
        a:
        $user_entry = readline($show ? "En attente d’interaction utilisateur".PHP_EOL : "");
        $user_array = explode("dire", $user_entry);

        try {
            match($this->getProtocol($user_entry)) {
                'dire' => $this->dire($user_array[1]),
                'marcher' => $this->marcher(),
                'repos' => $this->exit()
            };
        } catch (UnhandledMatchError $e) {
            echo "Attention commande '".$this->getProtocol($user_entry)."' inconnue !".PHP_EOL;
            goto a; // Si une erreur survient on renvoie l'utilisateur au début du script déxécution grâce à goto.
        }
    }

    /**
     * @description Permet à l'utilisateur de quitter le programme interactif.
     * @return void
     */
    private function exit(): void
    {
        echo "Fin du protocole";
        exit(0);
    }

    /**
     * @description Retourne le premier mots du tableau en tant que commande.
     * @param string $user_entry
     * @return string
     */
    private function getProtocol(string $user_entry): string
    {
        return explode(" ", $user_entry)[0];
    }
}