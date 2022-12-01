namespace Serveur.Models;

public record Question(
    string Nom,
    string Contenu,
    List<string> Documentation
);
