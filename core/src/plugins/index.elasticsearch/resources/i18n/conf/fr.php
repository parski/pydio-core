<?php
/*
* Copyright 2007-2013 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
* This file is part of Pydio.
*
* Pydio is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Pydio is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
*
* The latest code can be found at <http://pyd.io/>.
*/
$mess=array(
"Lucene Search Engine" => "Moteur de recherche Lucene",
"Zend_Search_Lucene implementation to index all files and search a whole repository quickly." => "Intégration de la librairie Zend_Search_Lucene pour l'indexation des fichiers et la recherche rapide.",
"Index Content" => "Indexer le contenu",
"Parses the file when possible and index its content (see plugin global options)" => "Indexe le contenu des documents si c'est possible (voir les options globales, fichiers textuels et html supportés)",
"Index Meta Fields" => "Champs métadonnées",
"Which additionnal fields to index and search" => "Liste de champs additionnels à indexer (en fonction des différents plugins meta ajoutés)",
"Repository keywords" => "Mot-clés Dépôt",
"If your repository path is defined dynamically by specific keywords like AJXP_USER, or your own, mention them here." => "Si votre dépôt contient des mot-clés type AJXP_USER, les mentionner ici pour assurer l'étanchéité des indexes.",
"Parse Content Until" => "Analyser le contenu jusqu'à",
"Skip content parsing and indexation for files bigger than this size (must be in Bytes)" => "Limite au delà de laquelle on n'analyse plus le contenu (trop long).",
"HTML files" => "Fichiers HTML",
"List of extensions to consider as HTML file and parse content" => "Liste d'extensions considérées comme des fichiers HTML.",
"Text files" => "Fichiers Textes",
"List of extensions to consider as Text file and parse content" => "Liste d'extensions considérées comme des fichiers textes.",
"ElasticSearch Search Engine" => "ElasticSearch Search Engine",
"ElasticSearch implementation to index all files and search a whole repository quickly." => "ElasticSearch implementation to index all files and search a whole repository quickly.",
"Max results displayed" => "Max results displayed",
"Set the maximum results that will be displayed." => "Set the maximum results that will be displayed.",
"Unoconv Path" => "Unoconv Path",
"Full path on the server to the 'unoconv' binary" => "Full path on the server to the 'unoconv' binary",
"PdftoText Path" => "PdftoText Path",
"Full path on the server to the 'pdftotext' binary" => "Full path on the server to the 'pdftotext' binary",
"Query Analyzer" => "Query Analyzer",
"Analyzer used by Zend to parse the queries. Warning, the UTF8 analyzers require the php mbstring extension." => "Analyzer used by Zend to parse the queries. Warning, the UTF8 analyzers require the php mbstring extension.",
"Wildcard limitation" => "Wildcard limitation",
"For the sake of performances, it is not recommanded to use wildcard as a very first character of a query string. Lucene recommends asking the user minimum 3 characters before wildcard. Still, you can set it to 0 if necessary for your usecases." => "For the sake of performances, it is not recommanded to use wildcard as a very first character of a query string. Lucene recommends asking the user minimum 3 characters before wildcard. Still, you can set it to 0 if necessary for your usecases.",
);