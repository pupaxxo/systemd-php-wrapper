<?php
/**
 * Created by PhpStorm.
 * User: andrearuggiero
 * Date: 2019-01-17
 * Time: 20:56
 */

namespace Pupax\SystemdWrapper\Models;


use Pupax\SystemdWrapper\Utils\KeyValueParser;

class ShowRow
{

    private $parsed;

    public function __construct(KeyValueParser $parsed)
    {
        $this->parsed = $parsed;
    }

    public function getProps()
    {
        return $this->parsed->getData();
    }

    public function getVersion()
    {
        return $this->parsed->get('Version');
    }

    public function getFeatures()
    {
        return $this->parsed->get('Features');
    }

    public function getVirtualization()
    {
        return $this->parsed->get('Virtualization');
    }

    public function getArchitecture()
    {
        return $this->parsed->get('Architecture');
    }

    public function getFirmwareTimestampMonotonic()
    {
        return $this->parsed->get('FirmwareTimestampMonotonic');
    }

    public function getLoaderTimestampMonotonic()
    {
        return $this->parsed->get('LoaderTimestampMonotonic');
    }

    public function getKernelTimestamp()
    {
        return $this->parsed->get('KernelTimestamp');
    }

    public function getKernelTimestampMonotonic()
    {
        return $this->parsed->get('KernelTimestampMonotonic');
    }

    public function getInitRDTimestampMonotonic()
    {
        return $this->parsed->get('InitRDTimestampMonotonic');
    }

    public function getUserspaceTimestamp()
    {
        return $this->parsed->get('UserspaceTimestamp');
    }

    public function getUserspaceTimestampMonotonic()
    {
        return $this->parsed->get('UserspaceTimestampMonotonic');
    }

    public function getFinishTimestamp()
    {
        return $this->parsed->get('FinishTimestamp');
    }

    public function getFinishTimestampMonotonic()
    {
        return $this->parsed->get('FinishTimestampMonotonic');
    }

    public function getSecurityStartTimestamp()
    {
        return $this->parsed->get('SecurityStartTimestamp');
    }

    public function getSecurityStartTimestampMonotonic()
    {
        return $this->parsed->get('SecurityStartTimestampMonotonic');
    }

    public function getSecurityFinishTimestamp()
    {
        return $this->parsed->get('SecurityFinishTimestamp');
    }

    public function getSecurityFinishTimestampMonotonic()
    {
        return $this->parsed->get('SecurityFinishTimestampMonotonic');
    }

    public function getGeneratorsStartTimestamp()
    {
        return $this->parsed->get('GeneratorsStartTimestamp');
    }

    public function getGeneratorsStartTimestampMonotonic()
    {
        return $this->parsed->get('GeneratorsStartTimestampMonotonic');
    }

    public function getGeneratorsFinishTimestamp()
    {
        return $this->parsed->get('GeneratorsFinishTimestamp');
    }

    public function getGeneratorsFinishTimestampMonotonic()
    {
        return $this->parsed->get('GeneratorsFinishTimestampMonotonic');
    }

    public function getUnitsLoadStartTimestamp()
    {
        return $this->parsed->get('UnitsLoadStartTimestamp');
    }

    public function getUnitsLoadStartTimestampMonotonic()
    {
        return $this->parsed->get('UnitsLoadStartTimestampMonotonic');
    }

    public function getUnitsLoadFinishTimestamp()
    {
        return $this->parsed->get('UnitsLoadFinishTimestamp');
    }

    public function getUnitsLoadFinishTimestampMonotonic()
    {
        return $this->parsed->get('UnitsLoadFinishTimestampMonotonic');
    }

    public function getLogLevel()
    {
        return $this->parsed->get('LogLevel');
    }

    public function getLogTarget()
    {
        return $this->parsed->get('LogTarget');
    }

    public function getNNames()
    {
        return $this->parsed->get('NNames');
    }

    public function getNFailedUnits()
    {
        return $this->parsed->get('NFailedUnits');
    }

    public function getNJobs()
    {
        return $this->parsed->get('NJobs');
    }

    public function getNInstalledJobs()
    {
        return $this->parsed->get('NInstalledJobs');
    }

    public function getNFailedJobs()
    {
        return $this->parsed->get('NFailedJobs');
    }

    public function getProgress()
    {
        return $this->parsed->get('Progress');
    }

    public function getEnvironment()
    {
        return $this->parsed->get('Environment');
    }

    public function getConfirmSpawn()
    {
        return $this->parsed->get('ConfirmSpawn');
    }

    public function getShowStatus()
    {
        return $this->parsed->get('ShowStatus');
    }

    public function getUnitPath()
    {
        return $this->parsed->get('UnitPath');
    }

    public function getDefaultStandardOutput()
    {
        return $this->parsed->get('DefaultStandardOutput');
    }

    public function getDefaultStandardError()
    {
        return $this->parsed->get('DefaultStandardError');
    }

    public function getRuntimeWatchdogUSec()
    {
        return $this->parsed->get('RuntimeWatchdogUSec');
    }

    public function getShutdownWatchdogUSec()
    {
        return $this->parsed->get('ShutdownWatchdogUSec');
    }

    public function getSystemState()
    {
        return $this->parsed->get('SystemState');
    }

    public function getDefaultTimerAccuracyUSec()
    {
        return $this->parsed->get('DefaultTimerAccuracyUSec');
    }

    public function getDefaultTimeoutStartUSec()
    {
        return $this->parsed->get('DefaultTimeoutStartUSec');
    }

    public function getDefaultTimeoutStopUSec()
    {
        return $this->parsed->get('DefaultTimeoutStopUSec');
    }

    public function getDefaultRestartUSec()
    {
        return $this->parsed->get('DefaultRestartUSec');
    }

    public function getDefaultStartLimitIntervalSec()
    {
        return $this->parsed->get('DefaultStartLimitIntervalSec');
    }

    public function getDefaultStartLimitBurst()
    {
        return $this->parsed->get('DefaultStartLimitBurst');
    }

    public function getDefaultCPUAccounting()
    {
        return $this->parsed->get('DefaultCPUAccounting');
    }

    public function getDefaultBlockIOAccounting()
    {
        return $this->parsed->get('DefaultBlockIOAccounting');
    }

    public function getDefaultMemoryAccounting()
    {
        return $this->parsed->get('DefaultMemoryAccounting');
    }

    public function getDefaultTasksAccounting()
    {
        return $this->parsed->get('DefaultTasksAccounting');
    }

    public function getDefaultLimitCPU()
    {
        return $this->parsed->get('DefaultLimitCPU');
    }

    public function getDefaultLimitCPUSoft()
    {
        return $this->parsed->get('DefaultLimitCPUSoft');
    }

    public function getDefaultLimitFSIZE()
    {
        return $this->parsed->get('DefaultLimitFSIZE');
    }

    public function getDefaultLimitFSIZESoft()
    {
        return $this->parsed->get('DefaultLimitFSIZESoft');
    }

    public function getDefaultLimitDATA()
    {
        return $this->parsed->get('DefaultLimitDATA');
    }

    public function getDefaultLimitDATASoft()
    {
        return $this->parsed->get('DefaultLimitDATASoft');
    }

    public function getDefaultLimitSTACK()
    {
        return $this->parsed->get('DefaultLimitSTACK');
    }

    public function getDefaultLimitSTACKSoft()
    {
        return $this->parsed->get('DefaultLimitSTACKSoft');
    }

    public function getDefaultLimitCORE()
    {
        return $this->parsed->get('DefaultLimitCORE');
    }

    public function getDefaultLimitCORESoft()
    {
        return $this->parsed->get('DefaultLimitCORESoft');
    }

    public function getDefaultLimitRSS()
    {
        return $this->parsed->get('DefaultLimitRSS');
    }

    public function getDefaultLimitRSSSoft()
    {
        return $this->parsed->get('DefaultLimitRSSSoft');
    }

    public function getDefaultLimitNOFILE()
    {
        return $this->parsed->get('DefaultLimitNOFILE');
    }

    public function getDefaultLimitNOFILESoft()
    {
        return $this->parsed->get('DefaultLimitNOFILESoft');
    }

    public function getDefaultLimitAS()
    {
        return $this->parsed->get('DefaultLimitAS');
    }

    public function getDefaultLimitASSoft()
    {
        return $this->parsed->get('DefaultLimitASSoft');
    }

    public function getDefaultLimitNPROC()
    {
        return $this->parsed->get('DefaultLimitNPROC');
    }

    public function getDefaultLimitNPROCSoft()
    {
        return $this->parsed->get('DefaultLimitNPROCSoft');
    }

    public function getDefaultLimitMEMLOCK()
    {
        return $this->parsed->get('DefaultLimitMEMLOCK');
    }

    public function getDefaultLimitMEMLOCKSoft()
    {
        return $this->parsed->get('DefaultLimitMEMLOCKSoft');
    }

    public function getDefaultLimitLOCKS()
    {
        return $this->parsed->get('DefaultLimitLOCKS');
    }

    public function getDefaultLimitLOCKSSoft()
    {
        return $this->parsed->get('DefaultLimitLOCKSSoft');
    }

    public function getDefaultLimitSIGPENDING()
    {
        return $this->parsed->get('DefaultLimitSIGPENDING');
    }

    public function getDefaultLimitSIGPENDINGSoft()
    {
        return $this->parsed->get('DefaultLimitSIGPENDINGSoft');
    }

    public function getDefaultLimitMSGQUEUE()
    {
        return $this->parsed->get('DefaultLimitMSGQUEUE');
    }

    public function getDefaultLimitMSGQUEUESoft()
    {
        return $this->parsed->get('DefaultLimitMSGQUEUESoft');
    }

    public function getDefaultLimitNICE()
    {
        return $this->parsed->get('DefaultLimitNICE');
    }

    public function getDefaultLimitNICESoft()
    {
        return $this->parsed->get('DefaultLimitNICESoft');
    }

    public function getDefaultLimitRTPRIO()
    {
        return $this->parsed->get('DefaultLimitRTPRIO');
    }

    public function getDefaultLimitRTPRIOSoft()
    {
        return $this->parsed->get('DefaultLimitRTPRIOSoft');
    }

    public function getDefaultLimitRTTIME()
    {
        return $this->parsed->get('DefaultLimitRTTIME');
    }

    public function getDefaultLimitRTTIMESoft()
    {
        return $this->parsed->get('DefaultLimitRTTIMESoft');
    }

    public function getDefaultTasksMax()
    {
        return $this->parsed->get('DefaultTasksMax');
    }

    public function getTimerSlackNSec()
    {
        return $this->parsed->get('TimerSlackNSec');
    }
}