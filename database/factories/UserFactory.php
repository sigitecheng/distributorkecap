<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.abas
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_lengkap' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),

            'alamat' => $this->faker->optional()->address, // Alamat karyawan (opsional)
            'tanggal_lahir' => $this->faker->optional()->date(), // Tanggal lahir karyawan (opsional)
            // 'nomor_telepon' => $this->faker->optional()->phoneNumber, // Nomor telepon karyawan (opsional)
            'nomor_telepon' => '08'. $this->faker->numerify('###########'),
            'status_pekerjaan' => $this->faker->randomElement(['Kontrak', 'Tetap', 'Magang', 'Paruh waktu', 'Penuh waktu']),
            'jenis_kelamin' => $this->faker->optional()->randomElement(['Laki-laki', 'Perempuan']), // Jenis kelamin karyawan (opsional)
            'status_admin' => $this->faker->randomElement(['admin', 'super admin']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
