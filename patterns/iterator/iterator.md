

Exemple d'itérator en Java :


```java
List<String> color = Arrays.asList("Blue", "Red", "Green");
Iterator<String> i = color.iterator(); // Créer un iterator sur des String
while (i.hasNext()) { // Est-ce qu'il y a un élément suivant ?
    System.out.println(i.next()); // On récupère l'élément
}
```