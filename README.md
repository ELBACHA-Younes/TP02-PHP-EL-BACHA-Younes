# TP02-PHP-EL-BACHA-YOUNES
TP 02 PHP — Programmation Web 2 — 2026/2027


EX 2 
5. 
Les variables $note et $Note sont différentes car PHP est sensible à la casse. 
Les majuscules et les minuscules sont donc distinguées.

`$a`: valide
`$_a` : valide
`$a_a` : valide
`$AAA` : valide
`$a!` : invalide
`$1a` : invalide
`$a1` : valide

EX 4
6.
avec echo false, rien n'est affiché car PHP fais la conversion du boolean 0 a un string vide et l'affiche, en 
avec var_dump(false), PHP affiche bool(false).