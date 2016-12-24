# liquid-admin
## Problem Definition
Startups und digitale Geschäftsmodelle können auf Verarbeitung und Repräsentation von Daten reduziert werden, die für jemanden von Wert sind, der bereit ist dafür zu bezahlen.

Ein Startup hat genug damit zu tun, sich um Verarbeitung um vordergründige Präsentation der Daten zu kümmern. Daneben gibt es aber auch noch ein Team, das Operationen und Korrekturen auf die Daten anwendet.

Jedes Startup schreibt sich hierfür eine eigene Lösung und mit jedem Feature muss immer das Admin Interface nachgezogen werden. Die Folge: Features launchen verzögert und es entsteht erhöhter Aufwand, da man sowohl einmal für den Kunden als auch einmal für das eigene Team entwickelt. Admin Interfaces von Startups und Agenturen sind deshalb immer Flickschusterei.

In den letzten 6 Jahren habe ich direkt als Entwickler oder indirekt als technisch Verantwortlicher über 500 Apps für Facebook und iOS gelaunched und dabei viel Schlechtes gesehen. Ich möchte dieses Problem endlich einmal richtig lösen. 

## Wie soll dieses Projekt das Problem lösen?
Die Lösung ist ein einfaches Admin Interface, das eine konfigurierbare Ansicht und Bearbeitung der Daten für das Team ermöglicht. 

Wie eine Datenbank Spalte sich im Frontend darstellt, kann durch nur wenige Eigenschaften definiert werden: 

- Wird die entsprechende Spalte überhaupt angezeigt?
- Bezeichnung und Beschreibung der Datenbankspalte
 Von welchem Datentyp ist der Inhalt? 
- Freitext
- Datum
- Zahl
- Ja/Nein (Boolean)
- Statusvariable/Auswahl aus einer Menge von festen Werten
- Querverbindung zu einer anderen Tabelle (Foreign Key)
- Darf dieser Inhalt manipuliert werden? Falls ja: wie? 
- Input Text
- Input Zahl
- Input Array
- Textarea
- Radio Button (Ja/Nein)
- Select Box (ein einzelner Wert)
- Checkboxen (mehrere Werte)
- Datum Auswahl

Diese Konfigurierbarkeit ist wichtig. Kein Unternehmen und kein Entwickler möchte dem Team direkten Zugriff auf die Datenbank erlauben. Einerseits weil es gefährlich ist, andererseits weil es auch für die Teammitglieder zu komplex wäre, da sie nicht das Wissen über die Zusammenhänge der Daten haben. 

Die meisten vorhandenen Tools wie phpMyAdmin, welche eine komplette Manipulation von Daten erlauben eignen sich deshalb nicht für Endnutzer. 

## Zielgruppe
Zielgruppe sind Startups, Agenturen und freelance Programmierer. 

Startups: 
Startups entwickeln schnell neue Features und wollen diese schnell an den Markt bringen. 
Wenn ein Feature fertig ist, soll es am liebsten sofort gelaunched werden. Dank des Liquid Admins muss lediglich die Konfiguration um neue Datenbankfelder erweitert werden. Es müssen nicht noch aufwendig Formulare und Basis CRUD-Operationen im eigenen Admin Interface programmiert werden. Diese Zeit ist besser investiert, um tatsächlich am Produkt zu arbeiten. 

Agenturen und freelance Programmierer:
Kunden bezahlen üblicherweise nur für die tatsächlich erbrachte Leistung, z.B. die Homepage oder die App. Ein Backend trägt in dem Sinne nicht zur Wertschöpfung bei und muss deshalb ohnehin schon sehr minimal gehalten werden. Mein Ziel ist es, diesen Aufwand ganz zu eliminieren. 

## Aktueller Stand
Zuletzt war mein persönlicher Leidensdruck in dieser Sache so hoch, dass ich die hier beschriebene Mechanik bereits im Rahmen eines größeren Projektes einmal selbst implementiert habe. 

Die dort verwendeten Frameworks Symfony mit Doctrine haben sich allerdings als zu viel Overhead für eine so dynamische Anforderung herausgestellt. Ich arbeite aktuell an einem Rewrite, um das Projekt unabhängig und frei von Dependencies weiterzuentwickeln. 

Aus den Learnings konnte bereits eine optimierte Konfigurationsdatei abgeleitet werden. Hier ist ein Beispiel für eine solche Konfigurationsdatei: https://github.com/klausbreyer/liquid-admin/blob/master/config.yml 

Zusätzlich existieren grobe Wireframes um im Zuge dieser Bewerbung die Mechanik deutlicher zu machen: 
https://github.com/klausbreyer/liquid-admin/tree/master/wireframes

## Milestones 
- Start mit MySQL und händische Konfiguration über eine config-Datei mit einfachen Editiermöglichkeiten (Text Input, Select, etc. )
- Verknüpfte Daten und Quick Links: Wo taucht die aktuell dargestellte Entität als Fremdschlüssel in anderen Tabellen auf? 
- Validatoren / Constraints für Felder
- Erweiterte Felder-Typen (Kalender-Auswahl, WYSIWYG, Datei-Upload, etc.)
- Nutzerverwaltung und Access Control List - 
- Unterstützung von PostgreSQL und anderen Datenbanken
