

namespace App\Creational\Strategy;


class VipCustomer extends CustomerAbstract
{

    public function pay($price)
    {
        return $price - floor($price / 100) * 5;
    }

}
