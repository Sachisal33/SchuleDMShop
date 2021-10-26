using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;

namespace DMAPI.Controllers
{
    [ApiController]
    [Route("api/v1/items")]
    public class WeatherForecastController : ControllerBase
    {
        [Route("newItem/{name:string}{price:string}")]
        [HttpPost]
        public async Task<IActionResult> CreateItemAsync(Shopitem shopitem)
        {
            if (product.Description.Contains("XYZ Widget"))
            {
                return BadRequest();
            }

            await _repository.AddProductAsync(product);

            return CreatedAtAction(nameof(GetById), new { id = product.Id }, product);
        }
    }
}
