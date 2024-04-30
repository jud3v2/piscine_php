#!/bin/bash

# Récupérer la sortie de la commande "cat passwd"
output=$(cat ./passwd.txt)

# Récupérer les lignes entre MY_LINE1 et MY_LINE2 (inclus)
filtered_output=$(echo "$output" | sed -n "${MY_LINE1},${MY_LINE2}p")

# Inverser chaque lettre du login et trier dans l'ordre inverse
result=$(echo "$filtered_output" | awk -F':' '{print $1}' | rev | sort -r)

# Afficher une ligne sur deux à partir de la deuxième ligne
final_result=$(echo "$result" | awk 'NR%2==0')

# Ajouter une virgule après chaque login, et terminer par un point et un retour à la ligne
final_output=$(echo "$final_result" | paste -sd, -)
echo "${final_output}."
