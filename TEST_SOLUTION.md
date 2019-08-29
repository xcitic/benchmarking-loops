# Teknisk Test for Schibsted SMB aka Mittanbud

## Min Fremgangsmetodikk:
<li>
1. Les gjennom oppgaven.
2. Tenk gjennom potensielle løsninger. Mmm middag.
3. Formuler en plan.
4. Sett opp version kontroll
5. Test hver loop med lite dataset
6. De loopene som umiddelbart er klare at kommer til å kjøre raskere enn andre, rank dem.
7. Skriv en timer funksjon. Echo ut tidsbruk etter å ha kjørt gjennom loopen med fult dataset.
8. Benchmark loopene.
9. Rank based on IRL benchmark
10. Noter alle notices and warnings som følge av empty array (oppgave B), gjør først?
</li>

NB! Husk at det er PHP 7.1 som skal brukes, pcen min er på PHP7.2, installer 7.1 og kjør upgrade-alternatives til å defaulte til 7.1 inntil reboot.



# A) Please arrange the loops after how fast they will run under PHP 7.1. If the dataset $array has about 1000000 int elements.

Dette løser jeg ved å sette opp loopene i hvert sitt script. Teste dem med et lite dataset.
Deretter generere en array med 1,000,000 int elementer, og kjøre en timer funksjon for å kalkulere tidsbruk.
Gjenta hver loop 100 ganger for å få et bedre gjennomsnitt.

# Before Benchmark Assumptions:
	1. Raskeste A
	2. Enten C / D
	3. Tregest B

# Benchmark Prosess:
--> 3 minutter pause mellom hvert script slik at CPU kan slappe av.
--> Hver loop går gjennom 100 ganger og lagrer tidsbruk før det regnes ut et gjennomsnitt av tidsbruk.


b) What will happen to the four loops if the dataset is empty $array = NULL;

### Results
→ A: Warning: count(): Parameter must be an array or an object that implements Countable.

→ B: PHP Warning:  Invalid argument supplied for foreach().

→ C: PHP Warning:  count(): Parameter must be an array or an object that implements Countable

→ D: PHP Warning:  count(): Parameter must be an array or an object that implements Countable
