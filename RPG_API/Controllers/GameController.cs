using Microsoft.AspNetCore.Mvc;

namespace Game.Api.Controllers;

[ApiController]
[Route("api/[controller]")]
public class GameController : ControllerBase
{
    [HttpGet("status")]
    public IActionResult Status()
    {
                return Ok(new { message = "API werkt" });
    }
}