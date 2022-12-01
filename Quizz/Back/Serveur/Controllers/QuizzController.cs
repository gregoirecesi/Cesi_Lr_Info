using Microsoft.AspNetCore.Mvc;
using Serveur.Models;

namespace Serveur.Controllers;

[ApiController]
[Route("[controller]")]
public class QuizzController : ControllerBase
{
    private readonly ILogger<QuizzController> _logger;

    public QuizzController(ILogger<QuizzController> logger)
    {
        _logger = logger;
    }

    [HttpGet("GetQuestion")]
    public ActionResult<Question> GetQuestion()
    {
        //return Ok("test");
        var maQuestion = new Question(
            "Vrai ou faux :",
            "1 est plus grand que 2 ?",
            new List<string>() { "https://lesnombres.fr/", "https://12.fr/" });
        return maQuestion;
    }
}