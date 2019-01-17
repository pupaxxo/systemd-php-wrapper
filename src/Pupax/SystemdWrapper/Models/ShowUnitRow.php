<?php

/**
 * Copyright 2019 - Andrea Ruggiero
 */

namespace Pupax\SystemdWrapper\Models;

use Pupax\SystemdWrapper\Utils\KeyValueParser;

class ShowUnitRow
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

    public function getType()
    {
        return $this->parsed->get('Type');
    }

    public function getRestart()
    {
        return $this->parsed->get('Restart');
    }

    public function getNotifyAccess()
    {
        return $this->parsed->get('NotifyAccess');
    }

    public function getRestartUSec()
    {
        return $this->parsed->get('RestartUSec');
    }

    public function getTimeoutStartUSec()
    {
        return $this->parsed->get('TimeoutStartUSec');
    }

    public function getTimeoutStopUSec()
    {
        return $this->parsed->get('TimeoutStopUSec');
    }

    public function getRuntimeMaxUSec()
    {
        return $this->parsed->get('RuntimeMaxUSec');
    }

    public function getWatchdogUSec()
    {
        return $this->parsed->get('WatchdogUSec');
    }

    public function getWatchdogTimestamp()
    {
        return $this->parsed->get('WatchdogTimestamp');
    }

    public function getWatchdogTimestampMonotonic()
    {
        return $this->parsed->get('WatchdogTimestampMonotonic');
    }

    public function getFailureAction()
    {
        return $this->parsed->get('FailureAction');
    }

    public function getPermissionsStartOnly()
    {
        return $this->parsed->get('PermissionsStartOnly');
    }

    public function getRootDirectoryStartOnly()
    {
        return $this->parsed->get('RootDirectoryStartOnly');
    }

    public function getRemainAfterExit()
    {
        return $this->parsed->get('RemainAfterExit');
    }

    public function getGuessMainPID()
    {
        return $this->parsed->get('GuessMainPID');
    }

    public function getMainPID()
    {
        return $this->parsed->get('MainPID');
    }

    public function getControlPID()
    {
        return $this->parsed->get('ControlPID');
    }

    public function getFileDescriptorStoreMax()
    {
        return $this->parsed->get('FileDescriptorStoreMax');
    }

    public function getNFileDescriptorStore()
    {
        return $this->parsed->get('NFileDescriptorStore');
    }

    public function getStatusErrno()
    {
        return $this->parsed->get('StatusErrno');
    }

    public function getResult()
    {
        return $this->parsed->get('Result');
    }

    public function getUID()
    {
        return $this->parsed->get('UID');
    }

    public function getGID()
    {
        return $this->parsed->get('GID');
    }

    public function getExecMainStartTimestamp()
    {
        return $this->parsed->get('ExecMainStartTimestamp');
    }

    public function getExecMainStartTimestampMonotonic()
    {
        return $this->parsed->get('ExecMainStartTimestampMonotonic');
    }

    public function getExecMainExitTimestampMonotonic()
    {
        return $this->parsed->get('ExecMainExitTimestampMonotonic');
    }

    public function getExecMainPID()
    {
        return $this->parsed->get('ExecMainPID');
    }

    public function getExecMainCode()
    {
        return $this->parsed->get('ExecMainCode');
    }

    public function getExecMainStatus()
    {
        return $this->parsed->get('ExecMainStatus');
    }

    public function getExecStart()
    {
        return $this->parsed->get('ExecStart');
    }

    public function getSlice()
    {
        return $this->parsed->get('Slice');
    }

    public function getControlGroup()
    {
        return $this->parsed->get('ControlGroup');
    }

    public function getMemoryCurrent()
    {
        return $this->parsed->get('MemoryCurrent');
    }

    public function getCPUUsageNSec()
    {
        return $this->parsed->get('CPUUsageNSec');
    }

    public function getTasksCurrent()
    {
        return $this->parsed->get('TasksCurrent');
    }

    public function getDelegate()
    {
        return $this->parsed->get('Delegate');
    }

    public function getCPUAccounting()
    {
        return $this->parsed->get('CPUAccounting');
    }

    public function getCPUWeight()
    {
        return $this->parsed->get('CPUWeight');
    }

    public function getStartupCPUWeight()
    {
        return $this->parsed->get('StartupCPUWeight');
    }

    public function getCPUShares()
    {
        return $this->parsed->get('CPUShares');
    }

    public function getStartupCPUShares()
    {
        return $this->parsed->get('StartupCPUShares');
    }

    public function getCPUQuotaPerSecUSec()
    {
        return $this->parsed->get('CPUQuotaPerSecUSec');
    }

    public function getIOAccounting()
    {
        return $this->parsed->get('IOAccounting');
    }

    public function getIOWeight()
    {
        return $this->parsed->get('IOWeight');
    }

    public function getStartupIOWeight()
    {
        return $this->parsed->get('StartupIOWeight');
    }

    public function getBlockIOAccounting()
    {
        return $this->parsed->get('BlockIOAccounting');
    }

    public function getBlockIOWeight()
    {
        return $this->parsed->get('BlockIOWeight');
    }

    public function getStartupBlockIOWeight()
    {
        return $this->parsed->get('StartupBlockIOWeight');
    }

    public function getMemoryAccounting()
    {
        return $this->parsed->get('MemoryAccounting');
    }

    public function getMemoryLow()
    {
        return $this->parsed->get('MemoryLow');
    }

    public function getMemoryHigh()
    {
        return $this->parsed->get('MemoryHigh');
    }

    public function getMemoryMax()
    {
        return $this->parsed->get('MemoryMax');
    }

    public function getMemorySwapMax()
    {
        return $this->parsed->get('MemorySwapMax');
    }

    public function getMemoryLimit()
    {
        return $this->parsed->get('MemoryLimit');
    }

    public function getDevicePolicy()
    {
        return $this->parsed->get('DevicePolicy');
    }

    public function getTasksAccounting()
    {
        return $this->parsed->get('TasksAccounting');
    }

    public function getTasksMax()
    {
        return $this->parsed->get('TasksMax');
    }

    public function getEnvironmentFile()
    {
        return $this->parsed->get('EnvironmentFile');
    }

    public function getUMask()
    {
        return $this->parsed->get('UMask');
    }

    public function getLimitCPU()
    {
        return $this->parsed->get('LimitCPU');
    }

    public function getLimitCPUSoft()
    {
        return $this->parsed->get('LimitCPUSoft');
    }

    public function getLimitFSIZE()
    {
        return $this->parsed->get('LimitFSIZE');
    }

    public function getLimitFSIZESoft()
    {
        return $this->parsed->get('LimitFSIZESoft');
    }

    public function getLimitDATA()
    {
        return $this->parsed->get('LimitDATA');
    }

    public function getLimitDATASoft()
    {
        return $this->parsed->get('LimitDATASoft');
    }

    public function getLimitSTACK()
    {
        return $this->parsed->get('LimitSTACK');
    }

    public function getLimitSTACKSoft()
    {
        return $this->parsed->get('LimitSTACKSoft');
    }

    public function getLimitCORE()
    {
        return $this->parsed->get('LimitCORE');
    }

    public function getLimitCORESoft()
    {
        return $this->parsed->get('LimitCORESoft');
    }

    public function getLimitRSS()
    {
        return $this->parsed->get('LimitRSS');
    }

    public function getLimitRSSSoft()
    {
        return $this->parsed->get('LimitRSSSoft');
    }

    public function getLimitNOFILE()
    {
        return $this->parsed->get('LimitNOFILE');
    }

    public function getLimitNOFILESoft()
    {
        return $this->parsed->get('LimitNOFILESoft');
    }

    public function getLimitAS()
    {
        return $this->parsed->get('LimitAS');
    }

    public function getLimitASSoft()
    {
        return $this->parsed->get('LimitASSoft');
    }

    public function getLimitNPROC()
    {
        return $this->parsed->get('LimitNPROC');
    }

    public function getLimitNPROCSoft()
    {
        return $this->parsed->get('LimitNPROCSoft');
    }

    public function getLimitMEMLOCK()
    {
        return $this->parsed->get('LimitMEMLOCK');
    }

    public function getLimitMEMLOCKSoft()
    {
        return $this->parsed->get('LimitMEMLOCKSoft');
    }

    public function getLimitLOCKS()
    {
        return $this->parsed->get('LimitLOCKS');
    }

    public function getLimitLOCKSSoft()
    {
        return $this->parsed->get('LimitLOCKSSoft');
    }

    public function getLimitSIGPENDING()
    {
        return $this->parsed->get('LimitSIGPENDING');
    }

    public function getLimitSIGPENDINGSoft()
    {
        return $this->parsed->get('LimitSIGPENDINGSoft');
    }

    public function getLimitMSGQUEUE()
    {
        return $this->parsed->get('LimitMSGQUEUE');
    }

    public function getLimitMSGQUEUESoft()
    {
        return $this->parsed->get('LimitMSGQUEUESoft');
    }

    public function getLimitNICE()
    {
        return $this->parsed->get('LimitNICE');
    }

    public function getLimitNICESoft()
    {
        return $this->parsed->get('LimitNICESoft');
    }

    public function getLimitRTPRIO()
    {
        return $this->parsed->get('LimitRTPRIO');
    }

    public function getLimitRTPRIOSoft()
    {
        return $this->parsed->get('LimitRTPRIOSoft');
    }

    public function getLimitRTTIME()
    {
        return $this->parsed->get('LimitRTTIME');
    }

    public function getLimitRTTIMESoft()
    {
        return $this->parsed->get('LimitRTTIMESoft');
    }

    public function getOOMScoreAdjust()
    {
        return $this->parsed->get('OOMScoreAdjust');
    }

    public function getNice()
    {
        return $this->parsed->get('Nice');
    }

    public function getIOScheduling()
    {
        return $this->parsed->get('IOScheduling');
    }

    public function getCPUSchedulingPolicy()
    {
        return $this->parsed->get('CPUSchedulingPolicy');
    }

    public function getCPUSchedulingPriority()
    {
        return $this->parsed->get('CPUSchedulingPriority');
    }

    public function getTimerSlackNSec()
    {
        return $this->parsed->get('TimerSlackNSec');
    }

    public function getCPUSchedulingResetOnFork()
    {
        return $this->parsed->get('CPUSchedulingResetOnFork');
    }

    public function getNonBlocking()
    {
        return $this->parsed->get('NonBlocking');
    }

    public function getStandardInput()
    {
        return $this->parsed->get('StandardInput');
    }

    public function getStandardOutput()
    {
        return $this->parsed->get('StandardOutput');
    }

    public function getStandardError()
    {
        return $this->parsed->get('StandardError');
    }

    public function getTTYReset()
    {
        return $this->parsed->get('TTYReset');
    }

    public function getTTYVHangup()
    {
        return $this->parsed->get('TTYVHangup');
    }

    public function getTTYVTDisallocate()
    {
        return $this->parsed->get('TTYVTDisallocate');
    }

    public function getSyslogPriority()
    {
        return $this->parsed->get('SyslogPriority');
    }

    public function getSyslogLevelPrefix()
    {
        return $this->parsed->get('SyslogLevelPrefix');
    }

    public function getSyslogLevel()
    {
        return $this->parsed->get('SyslogLevel');
    }

    public function getSyslogFacility()
    {
        return $this->parsed->get('SyslogFacility');
    }

    public function getSecureBits()
    {
        return $this->parsed->get('SecureBits');
    }

    public function getCapabilityBoundingSet()
    {
        return $this->parsed->get('CapabilityBoundingSet');
    }

    public function getAmbientCapabilities()
    {
        return $this->parsed->get('AmbientCapabilities');
    }

    public function getDynamicUser()
    {
        return $this->parsed->get('DynamicUser');
    }

    public function getRemoveIPC()
    {
        return $this->parsed->get('RemoveIPC');
    }

    public function getMountFlags()
    {
        return $this->parsed->get('MountFlags');
    }

    public function getPrivateTmp()
    {
        return $this->parsed->get('PrivateTmp');
    }

    public function getPrivateDevices()
    {
        return $this->parsed->get('PrivateDevices');
    }

    public function getProtectKernelTunables()
    {
        return $this->parsed->get('ProtectKernelTunables');
    }

    public function getProtectKernelModules()
    {
        return $this->parsed->get('ProtectKernelModules');
    }

    public function getProtectControlGroups()
    {
        return $this->parsed->get('ProtectControlGroups');
    }

    public function getPrivateNetwork()
    {
        return $this->parsed->get('PrivateNetwork');
    }

    public function getPrivateUsers()
    {
        return $this->parsed->get('PrivateUsers');
    }

    public function getProtectHome()
    {
        return $this->parsed->get('ProtectHome');
    }

    public function getProtectSystem()
    {
        return $this->parsed->get('ProtectSystem');
    }

    public function getSameProcessGroup()
    {
        return $this->parsed->get('SameProcessGroup');
    }

    public function getUtmpMode()
    {
        return $this->parsed->get('UtmpMode');
    }

    public function getIgnoreSIGPIPE()
    {
        return $this->parsed->get('IgnoreSIGPIPE');
    }

    public function getNoNewPrivileges()
    {
        return $this->parsed->get('NoNewPrivileges');
    }

    public function getSystemCallErrorNumber()
    {
        return $this->parsed->get('SystemCallErrorNumber');
    }

    public function getRuntimeDirectoryMode()
    {
        return $this->parsed->get('RuntimeDirectoryMode');
    }

    public function getMemoryDenyWriteExecute()
    {
        return $this->parsed->get('MemoryDenyWriteExecute');
    }

    public function getRestrictRealtime()
    {
        return $this->parsed->get('RestrictRealtime');
    }

    public function getRestrictNamespace()
    {
        return $this->parsed->get('RestrictNamespace');
    }

    public function getKillMode()
    {
        return $this->parsed->get('KillMode');
    }

    public function getKillSignal()
    {
        return $this->parsed->get('KillSignal');
    }

    public function getSendSIGKILL()
    {
        return $this->parsed->get('SendSIGKILL');
    }

    public function getSendSIGHUP()
    {
        return $this->parsed->get('SendSIGHUP');
    }

    public function getId()
    {
        return $this->parsed->get('Id');
    }

    public function getNames()
    {
        return $this->parsed->get('Names');
    }

    public function getRequires()
    {
        return $this->parsed->get('Requires');
    }

    public function getWantedBy()
    {
        return $this->parsed->get('WantedBy');
    }

    public function getConflicts()
    {
        return $this->parsed->get('Conflicts');
    }

    public function getBefore()
    {
        return $this->parsed->get('Before');
    }

    public function getAfter()
    {
        return $this->parsed->get('After');
    }

    public function getDocumentation()
    {
        return $this->parsed->get('Documentation');
    }

    public function getDescription()
    {
        return $this->parsed->get('Description');
    }

    public function getLoadState()
    {
        return $this->parsed->get('LoadState');
    }

    public function getActiveState()
    {
        return $this->parsed->get('ActiveState');
    }

    public function getSubState()
    {
        return $this->parsed->get('SubState');
    }

    public function getFragmentPath()
    {
        return $this->parsed->get('FragmentPath');
    }

    public function getUnitFileState()
    {
        return $this->parsed->get('UnitFileState');
    }

    public function getUnitFilePreset()
    {
        return $this->parsed->get('UnitFilePreset');
    }

    public function getStateChangeTimestamp()
    {
        return $this->parsed->get('StateChangeTimestamp');
    }

    public function getStateChangeTimestampMonotonic()
    {
        return $this->parsed->get('StateChangeTimestampMonotonic');
    }

    public function getInactiveExitTimestamp()
    {
        return $this->parsed->get('InactiveExitTimestamp');
    }

    public function getInactiveExitTimestampMonotonic()
    {
        return $this->parsed->get('InactiveExitTimestampMonotonic');
    }

    public function getActiveEnterTimestamp()
    {
        return $this->parsed->get('ActiveEnterTimestamp');
    }

    public function getActiveEnterTimestampMonotonic()
    {
        return $this->parsed->get('ActiveEnterTimestampMonotonic');
    }

    public function getActiveExitTimestampMonotonic()
    {
        return $this->parsed->get('ActiveExitTimestampMonotonic');
    }

    public function getInactiveEnterTimestampMonotonic()
    {
        return $this->parsed->get('InactiveEnterTimestampMonotonic');
    }

    public function getCanStart()
    {
        return $this->parsed->get('CanStart');
    }

    public function getCanStop()
    {
        return $this->parsed->get('CanStop');
    }

    public function getCanReload()
    {
        return $this->parsed->get('CanReload');
    }

    public function getCanIsolate()
    {
        return $this->parsed->get('CanIsolate');
    }

    public function getStopWhenUnneeded()
    {
        return $this->parsed->get('StopWhenUnneeded');
    }

    public function getRefuseManualStart()
    {
        return $this->parsed->get('RefuseManualStart');
    }

    public function getRefuseManualStop()
    {
        return $this->parsed->get('RefuseManualStop');
    }

    public function getAllowIsolate()
    {
        return $this->parsed->get('AllowIsolate');
    }

    public function getDefaultDependencies()
    {
        return $this->parsed->get('DefaultDependencies');
    }

    public function getOnFailureJobMode()
    {
        return $this->parsed->get('OnFailureJobMode');
    }

    public function getIgnoreOnIsolate()
    {
        return $this->parsed->get('IgnoreOnIsolate');
    }

    public function getNeedDaemonReload()
    {
        return $this->parsed->get('NeedDaemonReload');
    }

    public function getJobTimeoutUSec()
    {
        return $this->parsed->get('JobTimeoutUSec');
    }

    public function getJobTimeoutAction()
    {
        return $this->parsed->get('JobTimeoutAction');
    }

    public function getConditionResult()
    {
        return $this->parsed->get('ConditionResult');
    }

    public function getAssertResult()
    {
        return $this->parsed->get('AssertResult');
    }

    public function getConditionTimestamp()
    {
        return $this->parsed->get('ConditionTimestamp');
    }

    public function getConditionTimestampMonotonic()
    {
        return $this->parsed->get('ConditionTimestampMonotonic');
    }

    public function getAssertTimestamp()
    {
        return $this->parsed->get('AssertTimestamp');
    }

    public function getAssertTimestampMonotonic()
    {
        return $this->parsed->get('AssertTimestampMonotonic');
    }

    public function getTransient()
    {
        return $this->parsed->get('Transient');
    }

    public function getPerpetual()
    {
        return $this->parsed->get('Perpetual');
    }

    public function getStartLimitIntervalSec()
    {
        return $this->parsed->get('StartLimitIntervalSec');
    }

    public function getStartLimitBurst()
    {
        return $this->parsed->get('StartLimitBurst');
    }

    public function getStartLimitAction()
    {
        return $this->parsed->get('StartLimitAction');
    }

    public function getInvocationID()
    {
        return $this->parsed->get('InvocationID');
    }
}
