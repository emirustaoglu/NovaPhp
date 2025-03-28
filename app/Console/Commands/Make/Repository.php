<?php

namespace App\Console\Commands\Make;

use App\Console\Command;

class Repository extends Command
{
    protected string $signature = 'make:repository {repositoryName}';
    protected string $description = 'Yeni bir repositories dosyası oluşturur.';

    public function handle(): void
    {
        $repositoryName = $this->argument('repositoryName');
        if (!$repositoryName) {
            $this->error("Bir repositories adı belirtmelisiniz. Örnek: php nova make:repository repositoryName");
            return;
        }

        // Template dosyasının yolu
        $templatePath = __DIR__ . '/../../Templates/' . 'Repository.php';

        // ControllerName'deki son bölümü sınıf adı olarak al
        $repositoryNameParts = explode('/', $repositoryName);
        $className = end($repositoryNameParts);  // Gelen son parçayı alır, örn: AuthController

        // Yeni controller dosyasının oluşturulacağı yol
        $newRepositoryPath = config('app.paths.repository') . "/" . $repositoryName . '.php';

        // Dosyanın oluşturulacağı klasör yapısını kontrol et, klasör yoksa oluştur
        $folderPath = dirname($newRepositoryPath);
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true); // Gereken klasör yapısını oluştur
        }

        if (!file_exists($templatePath)) {
            $this->error("Template dosyası bulunamadı!");
            return;
        }

        // Namespace'i oluştur (App\Controllers\Kullanici gibi)
        $namespace = config('app.namespaces.repository');
        if (count($repositoryNameParts) > 1) {
            // className dışındaki parçaları namespace'e ekle
            $namespace .= '\\' . implode('\\', array_slice($repositoryNameParts, 0, -1));
        }

        // Template dosyasını oku
        $templateContent = file_get_contents($templatePath);

        // Template içeriğini değiştirme
        $templateContent = "<?php \n" . str_replace(
                '%NameSpace%',
                "/*
 * Dosya Adı => %DosyaAdi%
 * Eklenme Tarihi => %EklenmeTarihi%
 *
 */

namespace " . $namespace . ";", // Dinamik namespace ekle
                str_replace(
                    '%UseArea%',
                    "use Core\DB;",
                    str_replace('%ClassArea%', "class " . $className . " { }", $templateContent)
                )
            );

        $templateContent = str_replace(
            '%DosyaAdi%', $className,
            str_replace('%EklenmeTarihi%', date('Y-m-d H:i:s'), $templateContent)
        );

        // Yeni repository dosyasını oluştur ve içeriğini yaz
        if (file_put_contents($newRepositoryPath, $templateContent) !== false) {
            $this->info("Yeni repository dosyası oluşturuldu: $repositoryName");
        } else {
            $this->error("Yeni repository dosyası oluşturulamadı!");
        }
    }
}